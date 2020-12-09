<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'customer_id','shippedDate','status',
    ];

    public function orderDeTail()
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
