<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('categories.name', 'products.id','products.productName', 'cateDetails.cateDetail_name', 'products.image', 'products.buyPrice')
            ->where('productName', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('cateDetail_name', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('buyPrice', 'LIKE', '%' . $request->keyword . '%')
            ->get();

        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchByCategory()
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('name', 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('name', 'LIKE', 'BÀN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchByChair()
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('name', 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('name', 'LIKE', 'GHẾ')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchByBed()
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('name', 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('name', 'LIKE', 'GIƯỜNG')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchByCabinets()
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('name', 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('name', 'LIKE', 'TỦ')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchBySofa()
    {
        $products = DB::table('products')->join('categories', 'categories_id', '=', 'categories.id')
            ->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('name', 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('name', 'LIKE', 'SOFA')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchBySofaOne()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'SOFA ĐƠN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function searchBySofaDouble()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'SOFA 2 CHỖ')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function sofaThreeSeats()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'SOFA 3 CHỖ')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function sofaFourSeats()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'SOFA 4 CHỖ')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function sofaCorner()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'SOFA GÓC')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function dinnerTable()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'BÀN ĂN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }
    public function cafeTable()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'BÀN CAFE/BÀN BÊN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function desk()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'BÀN LÀM VIỆC')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function relaxingChair()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select( 'productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'GHẾ THƯ GIÃN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function diningChair()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'GHẾ ĂN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function chair()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'GHẾ LÀM VIỆC')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function stool()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'GHẾ ĐÔN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function barChair()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'GHẾ BAR')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function TVcabinet()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'TỦ TIVI')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function sideCabinet()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'TỦ BÊN')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }

    public function roomCabinet()
    {
        $products = DB::table('products')->join('cateDetails', 'cateDetail_id', '=', 'cateDetails.id')
            ->select('productName', 'cateDetail_name', 'image', 'buyPrice')
            ->Where('cateDetail_name', 'LIKE', 'TỦ ĐẦU GIƯỜNG')
            ->get();
        return view('customer.search.searchProducts', compact('products'));
    }



}
