<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\TestimonialRepository;
use App\Repositories\TestimonialRepositoryInterface;
use App\Repositories\ContactUsRepository;
use App\Repositories\ContactUsRepositoryInterface;
use App\Repositories\FAQRepository;
use App\Repositories\FAQRepositoryInterface;
use App\Repositories\QuestionRepository;
use App\Repositories\QuestionRepositoryInterface;
use App\Repositories\RatingRepositoryInterface;
use App\Repositories\RatingRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);
        $this->app->bind(FAQRepositoryInterface::class, FAQRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class); // ✅ Added binding
        $this->app->bind(RatingRepositoryInterface::class, RatingRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
