<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title',
        'slug'
    ];

    public function title(): string
    {
        return $this->title();
    }

    public function slug(): string
    {
        return $this->slug();
    }
}
