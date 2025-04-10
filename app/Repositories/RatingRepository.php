<?php

namespace App\Repositories;

use App\Models\RatingAndReview;
use App\Models\Product;
use App\Repositories\RatingRepositoryInterface;

class RatingRepository implements RatingRepositoryInterface
{
    public function all()
    {
        return RatingAndReview::get();
    }
    public function paginate($perPage =10)
    {
        return RatingAndReview::where('status', 1)->paginate($perPage);
    }
    public function find($id)
    {
        return RatingAndReview::findOrFail($id);
    }

    public function create(array $data)
    {

        try {
            if (!Product::where('id', $data['product_id'])->exists()) {
                $data['product_id'] = 1;
                if (Product::where('id', 1)->exists()) {
                    $data['product_id'] = 1;
                } else {
                    $data['product_id'] = 1;
                }
            }

        return RatingAndReview::create($data);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
    }

    public function update($id, array $data)
    {
        $rating = RatingAndReview::findOrFail($id);
        $rating->update($data);
        return $rating;
    }

    public function delete($id)
    {
        $rating = RatingAndReview::findOrFail($id);
        return $rating->delete();
    }
}
