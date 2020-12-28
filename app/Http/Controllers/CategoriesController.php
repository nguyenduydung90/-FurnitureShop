<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\CateDetail;
use App\Models\Categories;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Categories::all();
        return view('admin.categori',compact('categories'));
    }

    public function showToAddProduct()
    {
        $categories=Categories::all();
        $cateDetails=CateDetail::all();
        return view('admin.addProduct',compact('categories','cateDetails'));
    }

    public function showCateDetail()
    {
        $categories=Categories::all();
        return view('admin.addCateDetail',compact('categories'));
    }

    public function sendDataToCustomer()
    {
            $categories=Categories::all();

                return view('customer.core.header',compact('categories'));
        }



    public function create()
    {
        return view('admin.addCategori');
    }


    public function store(CategoriesRequest $request)
    {
        $categories=new Categories();
        $categories->fill($request->all());
        $categories->save();
        return redirect()->route('categories.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
            $categori=Categories::find($id);
            return view('admin.editCategories',compact('categori'));
    }


    public function update(CategoriesRequest $request, $id)
    {
        $categories=Categories::find($id);
        $categories->fill($request->all());
        $categories->save();
        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {
        $categories=Categories::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
