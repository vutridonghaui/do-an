<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'product_id', 'customer_id','content_comment', 'status'
    ];


}
