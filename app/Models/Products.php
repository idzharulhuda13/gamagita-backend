<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductGallery;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quatity'
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
