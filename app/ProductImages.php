<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
    public function getImageUrlAttribute($value)
    {
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        } else {
            return asset('storage/' . $value);
        }
    }
}
