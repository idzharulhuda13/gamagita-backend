<?php

namespace App\Models;

use App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];

    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Products::class, 'products_id', 'id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
