<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get category by product
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
