<?php

namespace App\Http\Controllers;

use App\Models\Order as ModelsOrder;
use App\Models\Product as ModelsProduct;
use App\Models\OrderDetail as ModelsOrderDetail;
use App\Models\Review as ModelsReview;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public static function index()
    {
        $pageName = 'Orders List';
        $orders = ModelsOrder::where('user_id', auth()->user()->id)->with('orderDetails')->orderBy('created_at', 'desc')->paginate(10);
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

    public static function reviewOrder(Request $request)
    {
        $pageName = 'Review Order';
        $order = ModelsOrderDetail::where(['order_id' => $request->order_id, 'bmuk_no' => $request->bmuk_no])->first();
        $product = ModelsProduct::where('bmuk_no', $order['bmuk_no'])->first()->toArray();
        $orderid = $request->order_id;
        $data = compact('product', 'orderid', 'pageName');
        return view('revieworder')->with($data);
    }

    public static function submitReview(Request $request)
    {
        ModelsReview::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'rating' => $request->score,
            'comment' => $request->comment,
        ]);
        return redirect()->route('orderdetails', ['orderNo' => $request->order_id])->with('toastSuccess', 'Review submitted successfully');
    }
}
