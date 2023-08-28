<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as ModelsUser;
use App\Models\Order as ModelsOrder;
use App\Models\Product as ModelsProduct;
use App\Models\Wishlist as ModelsWishlist;
use App\Models\Cart as ModelsCart;
use App\Models\OrderDetail as ModelsOrderDetail;

class DashboardController extends Controller
{
    public static function index()
    {
        $pageName = 'Customer Dashboard';
        $orders = ModelsOrder::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->with('orderDetails')->take(5)->get()->toArray();
        $temp_orders = ModelsOrder::where('user_id', auth()->user()->id)->with('orderDetails')->get()->toArray();
        $order_costs = [];
        foreach ($orders as $order) {
            $tempOrderCost = 0;
            foreach ($order['order_details'] as $order_detail) {
                $product = ModelsProduct::where('bmuk_no', $order_detail['bmuk_no'])->first()->toArray();
                $tempOrderCost += $product['price'] * $order_detail['quantity'];
            }
            $order_costs[$order['id']] = $tempOrderCost;
        }
        $orderCount = ModelsOrder::where('user_id', auth()->user()->id)->count();
        $totalOrderCost = 0;
        foreach ($temp_orders as $order) {
            $tempOrderCost = 0;
            foreach ($order['order_details'] as $order_detail) {
                $product = ModelsProduct::where('bmuk_no', $order_detail['bmuk_no'])->first()->toArray();
                $tempOrderCost += $product['price'] * $order_detail['quantity'];
            }
            $totalOrderCost += $tempOrderCost;
        }
        $data = compact('orders', 'pageName', 'orderCount', 'order_costs', 'totalOrderCost');
        return view('dashboard')->with($data);
    }

    public static function userSettings()
    {
        $pageName = 'User Settings';
        $temp_orders = ModelsOrder::where('user_id', auth()->user()->id)->with('orderDetails')->get()->toArray();
        $orderCount = ModelsOrder::where('user_id', auth()->user()->id)->count();
        $totalOrderCost = 0;
        foreach ($temp_orders as $order) {
            $tempOrderCost = 0;
            foreach ($order['order_details'] as $order_detail) {
                $product = ModelsProduct::where('bmuk_no', $order_detail['bmuk_no'])->first()->toArray();
                $tempOrderCost += $product['price'] * $order_detail['quantity'];
            }
            $totalOrderCost += $tempOrderCost;
        }
        $data = compact('pageName', 'orderCount', 'totalOrderCost');
        return view('usersetting')->with($data);
    }

    public static function wishlist()
    {
        $pageName = 'Wishlist';
        $wishlists = ModelsWishlist::where('user_id', auth()->user()->id)->pluck('bmuk_no')->toArray();
        $wishlists = ModelsProduct::whereIn('bmuk_no', $wishlists)->paginate(10);
        $data = compact('pageName', 'wishlists');
        return view('wishlist')->with($data);
    }

    public static function switchWishlist(Request $request)
    {
        $wishlist = ModelsWishlist::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmukNo)->first();
        if (!$wishlist) {
            $toastSuccess = "Added to Wishlist";
            ModelsWishlist::create([
                'user_id' => auth()->user()->id,
                'bmuk_no' => $request->bmukNo
            ]);
            return back()->with('toastSuccess', $toastSuccess);
        } else {
            ModelsWishlist::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmukNo)->delete();
            $toastDanger = "Removed from Wishlist";
            return back()->with('toastDanger', $toastDanger);
        }
        return back();
    }

    public static function cart()
    {
        $pageName = 'Cart';
        $cartItems = ModelsCart::where('user_id', auth()->user()->id)->with('product')->get()->toArray();
        $data = compact('pageName', 'cartItems');
        return view('cart')->with($data);
    }

    public static function addToCart(Request $request)
    {
        $toastSuccess = 'Added to Cart';
        $cartItem = ModelsCart::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmukNo)->first();
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            ModelsCart::create([
                'user_id' => auth()->user()->id,
                'bmuk_no' => $request->bmukNo,
                'quantity' => 1
            ]);
        }
        return back()->with('toastSuccess', $toastSuccess);
    }

    public static function removeFromCart(Request $request)
    {
        $toastDanger = 'Removed from Cart';
        ModelsCart::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmuk_no)->delete();
        return redirect()->route('cart')->with('toastDanger', $toastDanger);
    }

    public static function updateCart(Request $request)
    {
        $toastSuccess = 'Cart Updated Successfully';
        if ($request->quantity == 0) {
            ModelsCart::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmuk_no)->delete();
        } else {
            ModelsCart::where('user_id', auth()->user()->id)->where('bmuk_no', $request->bmuk_no)->update(['quantity' => $request->quantity]);
        }
        return redirect()->route('cart')->with('toastSuccess', $toastSuccess);
    }

    public static function checkout(Request $request)
    {
        $toastSuccess = 'Checkout Successful';
        $cartItems = ModelsCart::where('user_id', auth()->user()->id)->with('product')->get()->toArray();
        if (count($cartItems) == 0) {
            return redirect()->route('cart');
        }
        $totalCost = 0;
        foreach ($cartItems as $cartItem) {
            $totalCost += $cartItem['product']['price'] * $cartItem['quantity'];
        }
        $totalCost += 10;

        if ($request?->existingShippingAddress == '1') {
            $shipping_address = auth()->user()->shipping_address;
        } else {
            $shipping_address = $request->customShippingAddress;
        }

        if ($request?->existingBillingAddress == '1') {
            $billing_address = auth()->user()->billing_address;
        } else {
            $billing_address = $request->customBillingAddress;
        }
        $orderId = ModelsOrder::create([
            'user_id' => auth()->user()->id,
            'status' => 'Waiting for Payment',
            'payment_method' => $request->paymentMethod,
            'shipping_address' => $shipping_address,
            'billing_address' => $billing_address,
            'shipping_method' => $request->shippingMethod,
            'total_cost' => $totalCost,
        ])->id;
        foreach ($cartItems as $cartItem) {
            ModelsOrderDetail::create([
                'order_id' => $orderId,
                'bmuk_no' => $cartItem['bmuk_no'],
                'quantity' => $cartItem['quantity']
            ]);
        }
        ModelsCart::where('user_id', auth()->user()->id)->delete();
        return redirect()->route('orders')->with('toastSuccess', $toastSuccess);
    }

    public static function updateShippingAddress(Request $request)
    {
        $toastSuccess = 'Shipping Address Updated Successfully';
        $user = auth()->user();
        $user->shipping_address = $request->newAddress;
        ModelsUser::find($user->id)->update(['shipping_address' => $request->newAddress]);
        return redirect()->route('usersetting')->with('toastSuccess', $toastSuccess);
    }

    public static function updateBillingAddress(Request $request)
    {
        $toastSuccess = 'Billing Address Updated Successfully';
        $user = auth()->user();
        $user->billing_address = $request->newAddress;
        ModelsUser::find($user->id)->update(['billing_address' => $request->newAddress]);
        return redirect()->route('usersetting')->with('toastSuccess', $toastSuccess);
    }
}
