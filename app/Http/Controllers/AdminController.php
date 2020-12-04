<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showHomeAdmin()
    {
        return view('admin.home');
    }

    public function showViewProductList()
    {
        return view('admin.productList');
    }
}
