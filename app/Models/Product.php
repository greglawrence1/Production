<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'price', 'product_type_id', 'updated_at', 'created_at'];
    protected $guarded = [];

    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType', 'product_type_id', 'id');
    }
}
