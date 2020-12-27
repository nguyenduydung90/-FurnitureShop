<?php

namespace App\Http\Controllers;

use App\Models\CateDetail;
use App\Models\Categories;
use Illuminate\Http\Request;

class CateDetailController extends Controller
{

    public function index()
    {

        $cateDetails=CateDetail::all();
        return view('admin.ListCateDetail',compact('cateDetails'));
    }


    public function create()
    {
        return view('admin.addCateDetail');
    }


    public function store(Request $request)
    {
        $cateDetails=new CateDetail();
        $cateDetails->fill($request->all());
        $cateDetails->save();
        return redirect()->route('cateDetail.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $cateDetail=CateDetail::findOrFail($id);
        $categories = Categories::all();
        return view('admin.editCateDetail',compact('cateDetail','categories'));
    }


    public function update(Request $request, $id)
    {
        $cateDetails=CateDetail::findOrFail($id);
        $cateDetails->fill($request->all());

        $cateDetails->save();
        return redirect()->route('cateDetail.index');
    }


    public function destroy($id)
    {
        $cateDetail=CateDetail::findOrFail($id);
        $cateDetail->delete();
        return redirect()->route('cateDetail.index');

    }
}
