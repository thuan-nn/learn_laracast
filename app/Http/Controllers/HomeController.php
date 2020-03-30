<?php

namespace App\Http\Controllers;

use App\Events\OrderStatusUpdated;
use App\Order;

class HomeController extends Controller
{
    public function index() {

        return view('welcome');
    }

    public function update() {
        $order_id = Order::select('id')->get();
        OrderStatusUpdated::dispatch($order_id);
    }
}
