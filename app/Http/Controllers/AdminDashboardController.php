<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as ModelsOrder;
use App\Models\Product as ModelsProduct;
use App\Models\User as ModelsUser;

class AdminDashboardController extends Controller
{
    public static function index()
    {
        $pageName = 'Admin Dashboard';
        $toalCustomers = ModelsUser::where('is_admin', 0)->count();
        $toalOrders = ModelsOrder::count();
        $totalProducts = ModelsProduct::count();
        $totalOrderProcessing = ModelsOrder::where('status', 'Processing')->count();
        $ordersActive = ModelsOrder::whereIn('status', ['Waiting for Payment', 'Processing'])->get();;
        $userNames = [];
        foreach ($ordersActive as $order) {
            $userNames[$order->id] = ModelsUser::where('id', $order->user_id)->first()->name;
        }
        $data = compact('pageName', 'toalCustomers', 'toalOrders', 'totalProducts', 'totalOrderProcessing', 'ordersActive', 'userNames');
        return view('admindash')->with($data);
    }

    public static function updateOrderStatus(Request $request)
    {
        ModelsOrder::where('id', $request->orderid)->update([
            'status' => $request->setStatus,
        ]);
        return redirect()->back()->with('toastSuccess', 'Order Status Updated Successfully');
    }

    public static function orderDetails($id)
    {
        $pageName = 'Order Details (' . $id . ')';
        $orders = ModelsOrder::where('id', $id)->with('orderDetails')->first();
        $customerName = ModelsUser::where('id', $orders->user_id)->first()->name;
        $customerEmail = ModelsUser::where('id', $orders->user_id)->first()->email;
        $productDetails = [];
        foreach ($orders->toArray()['order_details'] as $order) {
            $product = ModelsProduct::where('bmuk_no', $order['bmuk_no'])->first()->toArray();
            $productDetails[$order['bmuk_no']] = $product;
        }
        $data = compact('orders', 'productDetails', 'customerName', 'customerEmail', 'pageName');
        return view('adminOrderdetails')->with($data);
    }

    public static function productList()
    {
        $pageName = 'Product List';
        $totalProducts = ModelsProduct::count();
        $totalOders = ModelsOrder::count();
        $last30daysproducts = ModelsProduct::where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))->count();
        $products = ModelsProduct::orderBy('bmuk_no')->paginate(10);
        $data = compact('pageName', 'products', 'totalProducts', 'totalOders', 'last30daysproducts');
        return view('adminProductList')->with($data);
    }

    public static function deleteProduct(Request $request)
    {
        ModelsProduct::where('bmuk_no', $request->bmuk_no)->delete();
        return redirect()->back()->with('toastDanger', 'Product Deleted Successfully');
    }

    public static function addProduct()
    {
        $pageName = 'Add Product';
        $data = compact('pageName');
        return view('adminAddproduct')->with($data);
    }

    public static function addProductSubmit(Request $request)
    {
        $result = ModelsProduct::create([
            'bmuk_no' => $request->bmukno,
            'euro_id' => $request->euroid,
            'oem_id' => $request->oemid,
            'image' => $request->image,
            'price' => $request->price,
            'collection' => $request->collection,
            'filter_type' => $request->filtertype,
            'car_brand' => $request->carbrand,
            'model' => $request->model,
            'specification' => urldecode($request->specification),
        ]);
        if ($result) {
            return redirect()->route('adminProductList')->with('toastSuccess', 'Product Added Successfully');
        } else {
            return redirect()->route('adminProductList')->with('toastDanger', 'Something Went Wrong');
        }
    }

    public static function editProduct(Request $request)
    {
        $pageName = 'Edit Product';
        $product = ModelsProduct::where('bmuk_no', $request->bmuk_no)->first();
        $data = compact('pageName', 'product');
        return view('adminEditproduct')->with($data);
    }

    public static function editProductSubmit(Request $request)
    {
        $result = ModelsProduct::where('bmuk_no', $request->oldbmukno)->update([
            'bmuk_no' => $request->bmukno,
            'euro_id' => $request->euroid,
            'oem_id' => $request->oemid,
            'image' => $request->image,
            'price' => $request->price,
            'collection' => $request->collection,
            'filter_type' => $request->filtertype,
            'car_brand' => $request->carbrand,
            'model' => $request->model,
            'specification' => urldecode($request->specification),
        ]);
        if ($result) {
            return redirect()->route('adminProductList')->with('toastSuccess', 'Product Added Successfully');
        } else {
            return redirect()->route('adminProductList')->with('toastDanger', 'Something Went Wrong');
        }
    }

    public static function customerList()
    {
        $pageName = 'Customer List';
        $totalCustomers = ModelsUser::count();
        $totalVerifiedCustomers = ModelsUser::where('email_verified_at', '!=', null)->count();
        $last30daysCustomers = ModelsUser::where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))->count();
        $customers = ModelsUser::orderBy('id')->paginate(10);
        $data = compact('pageName', 'customers', 'totalCustomers', 'totalVerifiedCustomers', 'last30daysCustomers');
        return view('adminCustomerList')->with($data);
    }

    public static function verifyCustomer(Request $request)
    {
        ModelsUser::where('id', $request->userid)->update([
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('toastSuccess', 'Customer Verified Successfully');
    }

    public static function customerPastOrders(int $user_id)
    {
        $userName = ModelsUser::where('id', $user_id)->first()->name;
        $customer = ModelsUser::where('id', $user_id)->first();
        $pageName = $userName . "'s Past Orders";
        $orders = ModelsOrder::where('user_id', $user_id)->with('orderDetails')->orderBy('created_at', 'desc')->paginate(10);
        $data = compact('orders', 'pageName', 'customer');
        return view('adminCustomerOrderHistory')->with($data);
    }
}
