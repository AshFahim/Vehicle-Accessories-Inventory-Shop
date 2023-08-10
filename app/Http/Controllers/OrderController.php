<?php

namespace App\Http\Controllers;

use App\Models\Order as ModelsOrder;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public static function index()
    {
        $pageName = 'Orders List';
        $orders = ModelsOrder::where('user_id', auth()->user()->id)->with('orderDetails')->paginate(10);
        $data = compact('orders', 'pageName');
        return view('orders')->with($data);
    }

    public static function orderDetails($id)
    {
        $pageName = 'Order Details (' . $id . ')';
        $orders = ModelsOrder::where('id', $id)->with('orderDetails')->first();
        $productDetails = [];
        foreach ($orders->toArray()['order_details'] as $order) {
            $product = ModelsProduct::where('bmuk_no', $order['bmuk_no'])->first()->toArray();
            $productDetails[$order['bmuk_no']] = $product;
        }
        $data = compact('orders', 'productDetails', 'pageName');

        return view('orderdetails')->with($data);
    }
}
