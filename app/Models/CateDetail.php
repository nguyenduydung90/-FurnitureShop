<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateDetail extends Model
{
    use HasFactory;
    protected $table='cateDetails';
    protected $fillable=[
        'id',
        'category_id',
        'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'cateDetail_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
