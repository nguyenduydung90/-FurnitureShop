<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
       $data=new Register();
       $data->fill($request->all());
       $data->password=Hash::make($request->password);
       $data->save();
       return view('login.index');
    }
}
