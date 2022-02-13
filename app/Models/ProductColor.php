<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table = 'product_color';

    protected $fillable = [
        'product_id', 'color_id', 'status'
    ];
}
