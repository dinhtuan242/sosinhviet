<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'aff_link',
        'campaign',
        'category',
        'description',
        'discount',
        'discount_amount',
        'discount_rate',
        'domain',
        'image',
        'merchant',
        'name',
        'price',
        'product_id',
        'promotion',
        'sku',
        'status_discount',
        'url',
    ];
}
