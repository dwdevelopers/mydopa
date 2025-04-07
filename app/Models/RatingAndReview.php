<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatingAndReview extends Model
{
    protected $table='ratings_and_reviews';
    protected $fillable = [
        'name', 'email', 'phone', 'product_id', 'rating', 'title', 'review', 'status'
    ];

    // Relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
