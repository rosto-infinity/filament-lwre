<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
           "name",
            "sku",
            "description",
            "price",
            "stock",
            "image",
            "is_active",
           "is_featured",
           "created_at",
           "updated_at"
    ];
}
