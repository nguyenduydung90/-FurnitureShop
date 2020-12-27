<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $cart=Session::get('cart');

        return view('customer.thanh-toan',compact('cart'));
    }

    public function showManageOrder()
    {
        $order=DB::table('customers')->join('orders','orders.customer_id','=','customers.id')
            ->join('orderDetails','orderDetails.order_id','=','orders.id')
            ->join('products','products.id','=','orderDetails.product_id')
        ->select('customers.name','customers.address','customers.phone','products.productName','orderDetails.quanttityOrder','orderDetails.price','orders.shippedDate','orders.status','orders.id')
        ->get();

        return view('admin.manageOrder',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart=Session::get('cart');

        //add to customer table
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->phone=$request->phone;
        $customer->save();


        //add to order table
        $order=new Order();
        $order->customer_id=$customer->id;
        $order->shippedDate='Đang chờ xử lý';
        $order->status='Đang chờ xử lý';
        $order->save();

        //add to orderDetail table

        foreach ($cart->items as $data){
            $orderDetail=new OrderDetail();
        $orderDetail->product_id=$data['item']->id;
        $orderDetail->order_id=$order->id;
        $orderDetail->quanttityOrder=$data['qty'];
        $orderDetail->price=$data['price'];
        $orderDetail->save();
        }
        $request->session()->forget('cart');
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $orders=Order::findOrFail($id);

            return view('admin.editManage',compact('orders'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order=Order::findOrFail($id);
        $order->fill($request->all());
        $order->status=$request->status;
        $order->shippedDate=$request->shipped;
        $order->save();
        return redirect()->route('manage.showManageOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
