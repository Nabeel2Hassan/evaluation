<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductRentTenure;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\ProductRatingsReview;
use App\Models\ProductPrice;


class Product extends Model
{
    use HasFactory;
    protected $appends = ['rating', 'review_count'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function rentTenures(){
        return $this->hasMany(ProductRentTenure::class);
    }

    public function sizes(){
        return $this->hasMany(ProductSize::class);
    }

    public function ratingsreviews(){
        return $this->hasMany(ProductRatingsReview::class);
    }

    public function prices(){
        return $this->hasMany(ProductPrice::class);
    }

    public function getRatingAttribute()
    {
        return $this->hasMany(ProductRatingsReview::class)->avg('ratting');
    }

    public function getReviewCountAttribute()
    {
        return $this->hasMany(ProductRatingsReview::class)->count('review');

    }
}
