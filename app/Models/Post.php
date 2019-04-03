<?php

namespace App\Models;

use App\Admin;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'thumbnail',
        'banner'
    ];

    // public function author()
    // {
    //     return $this->hasMany(Admin::class);
    // }
}
