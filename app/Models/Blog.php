<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comment()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }
}
