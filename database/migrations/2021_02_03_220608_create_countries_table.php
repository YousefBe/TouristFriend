<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('longtiude');
            $table->string('latitude');
            $table->enum('contnent', ['Africa', 'Antarctica', 'Asia', 'Australia', 'Europe', 'North America', 'South America']);
            $table->text('details');
            $table->text('weather');
            $table->string('currency');
            $table->string('population');
            $table->text('budget');
            $table->enum('budget_flag', ['low', 'medium', 'expensive']);
            $table->enum('weather_flag', ['cold', 'moderate', 'hot']);
            $table->enum('known_for', ['shopping', 'beaches', 'Tourist Attractions']);
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
        Schema::dropIfExists('countries');
    }
}