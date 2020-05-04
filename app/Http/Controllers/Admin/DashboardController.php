<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lotto;
use App\Order;

class DashboardController extends Controller
{
    public function index(Request $request){

    	$lotto_count = Lotto::all()->sum('stock');
    	$lotto_order_count = Order::all()->sum('buy_q');
    	$lotto_count_all = $lotto_count+$lotto_order_count;

    	$lotto_order_sale = Order::all()->sum('total');


    	return view('admin.index', compact('lotto_count_all','lotto_order_sale','lotto_order_count','lotto_order_sale'));
    }
}
