<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table='orderDetails';

    protected $fillable=[
        'order_id','product_Id','quanttityOrder','price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function productorder()
    {
        return $this->hasMany(Product::class,'product_Id',);
    }
}
