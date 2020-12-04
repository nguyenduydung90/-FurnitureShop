<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'categories_id',
        'cateDetail_id',
        'height',
        'width',
        'length',
        'color',
        'material',
        'productDescription',
        'productName',
        'buyPrice',
        'image'
    ];


    public function cateDetail()
    {
        return $this->belongsTo(CateDetail::class,'cateDetail_id');
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class,'categories_id');
    }
}
