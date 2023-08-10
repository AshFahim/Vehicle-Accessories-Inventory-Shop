<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as ModelsUser;
use App\Models\Order as ModelsOrder;
use App\Models\Product as ModelsProduct;

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

    public static function updateShippingAddress(Request $request)
    {
        $user = auth()->user();
        $user->shipping_address = $request->newAddress;
        ModelsUser::find($user->id)->update(['shipping_address' => $request->newAddress]);
        return redirect()->route('usersetting');
    }

    public static function updateBillingAddress(Request $request)
    {
        $user = auth()->user();
        $user->billing_address = $request->newAddress;
        ModelsUser::find($user->id)->update(['billing_address' => $request->newAddress]);
        return redirect()->route('usersetting');
    }
}
