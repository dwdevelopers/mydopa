<?php

namespace App\Services;

use App\Repositories\RatingRepositoryInterface;

class RatingService
{
    protected $ratingRepository;

    public function __construct(RatingRepositoryInterface $ratingRepository)
    {
        $this->ratingRepository = $ratingRepository;
    }

    public function getAllRatings()
    {
        return $this->ratingRepository->all();
    }

    public function getRatingById($id)
    {
        return $this->ratingRepository->find($id);
    }

    public function createRating(array $data)
    {
        return $this->ratingRepository->create($data);
    }

    public function updateRating($id, array $data)
    {
        return $this->ratingRepository->update($id, $data);
    }

    public function deleteRating($id)
    {
        return $this->ratingRepository->delete($id);
    }
}
