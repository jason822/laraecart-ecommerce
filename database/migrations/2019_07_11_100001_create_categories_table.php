<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: categories
         */
        Schema::create('categories', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->text('discription')->nullable();
            $table->text('type')->nullable();
            $table->string('slug', 255)->nullable();
            $table->text('meta_tag')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->integer('sort_order')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('user_id')->nullable();
            $table->text('user_type')->nullable();
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
        Schema::drop('categories');
    }
}
