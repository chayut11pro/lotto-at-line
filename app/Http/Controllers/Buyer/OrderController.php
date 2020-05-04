<?php

namespace App\Http\Controllers\Buyer;

use App\Order;
use App\Lotto;
use App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function confirm(Request $request) {

        $lotto = Lotto::find($request->lotto_id);
        $nowstock = $lotto->stock;
        $lotto->stock = $nowstock-$request->buy_q;
        $lotto->save();

    	$order = new Order;
        $order->buyer_id = $request->buyer_id;
        $user_id = $request->buyer_id;
        $order->seller_id = $request->seller_id;
        $order->lotto_number = $request->lotto_number;
        $order->lotto_id = $request->lotto_id;
        $order->price = $request->price;
        $order->buy_q = $request->buy_q;
        $order->shipping_cost = $request->shipping_cost;
        $order->shipping_status = $request->shipping_status;
        $order->order_status = $request->order_status;
        $order->payment_status = $request->payment_status;
        $order->announ_date = \Carbon\Carbon::parse($request->announ_date)->format('Y-m-d');
        $order->total = $request->total;
        $order->save();

        $params['order'] = Order::whereRaw("buyer_id = $user_id ")->get();
        $params['lotto'] = Lotto::whereRaw("stock > 0")->get();

        return $params;
    }


}
