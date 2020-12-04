<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('customer.homeCustomer',compact('products'));
    }

    public function showCart()
    {
        return view('customer.cart');
    }

    public function showProductDetail()
    {
        return view('customer.chi-tiet-san-pham');
    }

    public function showViewProduct()
    {
        return view('customer.san-pham');
    }
}
