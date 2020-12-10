<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CateDetailController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('/')->group(function (){

    Route::get('/',[UserController::class,'showPageGuest'])->name('customer.index');
    Route::get('/home',[CategoriesController::class,'sendDataToCustomer'])->name('customer.sendDataToCustomer');

});


Route::prefix('customer')->group(function (){
    Route::get('/cart',[CustomerController::class,'showCart'])->name('customer.showCart');
    Route::get('/productDetail/{id}',[CustomerController::class,'showProductDetail'])->name('customer.showProductDetail');
    Route::get('/product',[CustomerController::class,'index'])->name('customer.showViewProduct');

});

Route::prefix('admin')->group(function (){
    Route::get('/',[UserController::class,'showPageAdmin'])->name('admin.showHomeAdmin');
    Route::get('/productList',[ProductsController::class,'index'])->name('admin.index');
    Route::get('/addProduct',[ProductsController::class,'create'])->name('product.create');
    Route::post('/addProduct',[ProductsController::class,'store'])->name('product.store');
    Route::get('/{id}/destroy',[ProductsController::class,'destroy'])->name('product.destroy');
    Route::get('/{id}/edit',[ProductsController::class,'edit'])->name('product.edit');
    Route::post('/{id}/update',[ProductsController::class,'update'])->name('product.update');

    /* categories*/
    Route::get('/categories',[CategoriesController::class,'index'])->name('categories.index');
    Route::get('/addCategories',[CategoriesController::class,'create'])->name('categories.create');
    Route::post('/addCategories',[CategoriesController::class,'store'])->name('categories.store');
    Route::get('/{id}/editCategories',[CategoriesController::class,'edit'])->name('categories.edit');
    Route::post('/{id}/editCategories',[CategoriesController::class,'update'])->name('categories.update');
    Route::get('/{id}/deleteCategories',[CategoriesController::class,'destroy'])->name('categories.delete');
    Route::get('/addProduct',[CategoriesController::class,'showToAddProduct'])->name('categories.showToAddProduct');
    Route::get('/createCateDetail',[CategoriesController::class,'showCateDetail'])->name('cateDetail.create');

    /* cateDetails*/
    Route::get('/cateDetail',[CateDetailController::class,'index'])->name('cateDetail.index');
    Route::post('/addCateDetail',[CateDetailController::class,'store'])->name('cateDetail.store');
    Route::get('/{id}/deleteCateDetail',[CateDetailController::class,'destroy'])->name('cateDetail.destroy');
    Route::get('/{id}/editCateDetail',[CateDetailController::class,'edit'])->name('cateDetail.edit');
    Route::post('/{id}/editCateDetail',[CateDetailController::class,'update'])->name('cateDetail.update');

    //manageOrder
    Route::get('/manageOrder',[OrderController::class,'showManageOrder'])->name('manage.showManageOrder');
    Route::get('/editManage/{id}',[OrderController::class,'edit'])->name('manage.edit');
    Route::post('/editManage/{id}',[OrderController::class,'update'])->name('manage.update');

});


Route::prefix('search')->group(function (){
    Route::post('/product',[SearchController::class,'searchProduct'])->name('search.product');
    Route::get('/searchByCategory',[SearchController::class,'searchByCategory'])->name('search.category');
    Route::get('/searchByChair',[SearchController::class,'searchByChair'])->name('search.searchByChair');
    Route::get('/searchByBed',[SearchController::class,'searchByBed'])->name('search.searchByBed');
    Route::get('/searchByCabinets',[SearchController::class,'searchByCabinets'])->name('search.searchByCabinets');
    Route::get('/searchBySofa',[SearchController::class,'searchBySofa'])->name('search.searchBySofa');
    Route::get('/searchBySofaOne',[SearchController::class,'searchBySofaOne'])->name('search.searchBySofaOne');
    Route::get('/searchBySofaDouble',[SearchController::class,'searchBySofaDouble'])->name('search.searchBySofaDouble');
    Route::get('/sofaThreeSeats',[SearchController::class,'sofaThreeSeats'])->name('search.sofaThreeSeats');
    Route::get('/sofaFourSeats',[SearchController::class,'sofaFourSeats'])->name('search.sofaFourSeats');
    Route::get('/sofaCorner',[SearchController::class,'sofaCorner'])->name('search.sofaCorner');
    Route::get('/dinnerTable',[SearchController::class,'dinnerTable'])->name('search.dinnerTable');
    Route::get('/cafeTable',[SearchController::class,'cafeTable'])->name('search.cafeTable');
    Route::get('/desk',[SearchController::class,'desk'])->name('search.desk');
    Route::get('/relaxingChair',[SearchController::class,'relaxingChair'])->name('search.relaxingChair');
    Route::get('/diningChair',[SearchController::class,'diningChair'])->name('search.diningChair');
    Route::get('/chair',[SearchController::class,'chair'])->name('search.chair');
    Route::get('/stool',[SearchController::class,'stool'])->name('search.stool');
    Route::get('/barChair',[SearchController::class,'barChair'])->name('search.barChair');
    Route::get('/TVcabinet',[SearchController::class,'TVcabinet'])->name('search.TVcabinet');
    Route::get('/sideCabinet',[SearchController::class,'sideCabinet'])->name('search.sideCabinet');
    Route::get('/roomCabinet',[SearchController::class,'roomCabinet'])->name('search.roomCabinet');
});

Route::prefix('login')->group(function (){
    Route::get('/',[LoginController::class,'showViewLog'])->name('login');
    Route::get('/registration',[LoginController::class,'showViewRegistration'])->name('registration');
    Route::post('/register',[RegisterController::class,'register'])->name('register');
    Route::post('/logined',[LoginController::class,'checkLogin'])->name('login.checkLogin');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
    Route::post('/logoutadmin',[LoginController::class,'logoutAdmin'])->name('logout.admin');
});
 Route::prefix('cart')->group(function (){
     Route::get('/',[CartController::class,'index'])->name('cart.index');
     Route::middleware('auth')->get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('cart.addToCart');
     Route::get('/remove-to-cart/{id}',[CartController::class,'removeProductIntoCart'])->name('cart.removeProductIntoCart');
     Route::post('/update-to-cart/{id}',[CartController::class,'updateProductIntoCart'])->name('cart.updateProductIntoCart');
     Route::get('/checkout',[OrderController::class,'index'])->name('checkout');
     Route::post('/checkout',[OrderController::class,'store'])->name('checkout.checkout');
 });

