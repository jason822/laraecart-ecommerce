<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: reviews
         */
        Schema::create('reviews', function ($table) {
            $table->increments('id');
            $table->integer('product_id')->nullable();
            $table->integer('author_name')->nullable();
            $table->integer('author_email')->nullable();
            $table->integer('author_phone')->nullable();
            $table->integer('review')->nullable();
            $table->integer('rating')->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('reviews');
    }
}
