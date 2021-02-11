<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('point_id')->nullable();
            // $table->unsignedBigInteger('post_id')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('point_id')->references('id')->on('point_of_interests');
            // $table->foreign('post_id')->references('id')->on('posts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}