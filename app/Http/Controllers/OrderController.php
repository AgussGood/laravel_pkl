<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //ordercontroller.php
    public function index()
    {
        $orders = Order::with('products')->where('user_id', auth()->id())->latest()->get();
        return view('order', compact('orders'));
    }
    public function show($id)
    {
        $orders = Order::with('products')->where('user_id', auth()->id())->findOrFail($id);
        return view('order_detail', compact('orders'));
    }
}
