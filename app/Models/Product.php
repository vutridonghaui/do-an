<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'product_slug', 'price', 'thumbnail', 'topic_id', 'accessories', 'promotion', 'title', 'description', 'qty', 'status',
    ];

    public function productTopic(){
        $this->belongsTo(Topic::class, 'product_id');
    }

    public function color()
    {
        return $this->belongsToMany('App\Models\Color','product_color','product_id','color_id');
    }

    public function size()
    {
        return $this->belongsToMany('App\Models\Size','product_size','product_id','size_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

}
