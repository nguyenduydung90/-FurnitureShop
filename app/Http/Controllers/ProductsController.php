<?php

namespace App\Http\Controllers;

use App\Models\CateDetail;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('admin.productList',compact('products'));
    }




    public function create()
    {
        return view('admin.addProduct');
    }


    public function store(Request $request)
    {
        $products=new Product();
        $products->fill($request->all());
        $products->productDescription=$request->productDescription;

        $imageName='images/'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $products->image=$imageName;
        $products->save();
        return redirect()->route('admin.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $products=Product::findOrFail($id);
        $categories=Categories::all();
        $cateDetails=CateDetail::all();

        return view('admin.editProducts',compact('products','categories','cateDetails'));
    }


    public function update(Request $request, $id)
    {
        $products=Product::findOrFail($id);
        $products->fill($request->all());

        $imageName='images/'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $products->image=$imageName;
        $products->save();
        return redirect()->route('admin.index');
    }


    public function destroy($id)
    {
        $products=Product::findOrFail($id);
        $products->delete();
        return redirect()->route('admin.index');
    }


}
