<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::latest()->take(8)->get();
        return view('index', compact('product'));
    }
    public function about()
    {
        return view('about');
    }
    public function product()
    {
        return view('product');
    }
    public function cart()
    {
        return view('cart');
    }
}
