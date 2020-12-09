<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class LoginController extends Controller
{
    public function showViewLog()
    {
        return view('login.index');
    }

    public function showViewRegistration()
    {
        return view('login.registration');
    }

    public function checkLogin(Request $request)
    {
        $products= DB::table('products')->simplePaginate(8);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'roles'=>'admin'])){
            $user=Auth::user();
            $name=$user->name;
            $request->session()->push('login',$name);
            return view('admin.home');
        }

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'roles'=>'user'])){
            $user=Auth::user();
            $name=$user->name;
            $request->session()->push('login',$name);
//            return view('customer.homeCustomer',compact('products'));
            return redirect()->route('customer.index');
        }
    }

    public function logout(Request $request)
    {
        $products= DB::table('products')->simplePaginate(8);

        $request->session()->flush();
        return redirect()->route('customer.index');
    }

    public function logoutAdmin(Request $request)
    {
        $products= DB::table('products')->simplePaginate(8);
        $request->session()->flush();
        return view('customer.homeCustomer',compact('products'));
    }
}
