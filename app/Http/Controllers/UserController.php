<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function userCan($action, $option=null)
    {
        $user=Auth::user();
        return Gate::forUser($user)->allows($action,$option);
    }

    public function showPageGuest()
    {
        $products= DB::table('products')->simplePaginate(8);
        if ($this->userCan('/')){

            abort('403',__('Bạn không có quyền '));
        }
//        return redirect()->route('customer.index');
        return view('customer.homeCustomer',compact('products'));
    }
    public function showPageAdmin()
    {
        $products= DB::table('products')->simplePaginate(8);
        if (!$this->userCan('admin.home')){
            abort('403',__('Bạn không có quyền '));
        }
        return view('admin.productList',compact('products'));
    }
}
