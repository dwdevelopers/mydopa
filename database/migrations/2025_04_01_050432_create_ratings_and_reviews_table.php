<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings_and_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // Foreign key for the user
            $table->string('phone')->nullable(); // Foreign key for the user
            $table->unsignedBigInteger('product_id'); // Foreign key for the product
            $table->integer('rating')->default(0); // Rating (1-5)
            $table->string('title')->nullable();
            $table->text('review')->nullable(); // Review text
            $table->boolean('status')->default(0); // <-- New status column

            $table->timestamps();

            // Foreign key constraints
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings_and_reviews');
    }
};
