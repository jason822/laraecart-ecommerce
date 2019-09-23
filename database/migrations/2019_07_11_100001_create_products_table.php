<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: products
         */
        Schema::create('products', function ($table) {
            $table->increments('id');
            $table->integer('manufacturer_id')->nullable();
            $table->mediumText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('features')->nullable();
            $table->text('size')->nullable();
            $table->text('color')->nullable();
            $table->text('meta_title')->nullable();
            $table->mediumText('meta_discription')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('sku', 8)->nullable();
            $table->integer('upc')->nullable();
            $table->integer('ean')->nullable();
            $table->integer('jan')->nullable();
            $table->integer('isbn')->nullable();
            $table->string('mpn', 7)->nullable();
            $table->increments('price')->nullable();
            $table->string('tax', 255)->nullable();
            $table->integer('slider')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('minimum_quantity')->nullable();
            $table->enum('subtract_stock', ['yes','no'])->nullable();
            $table->enum('stock_status', ['2-3 days','In Stock','Out of Stock','Pre-Order'])->nullable();
            $table->enum('shipping', ['yes','no'])->nullable();
            $table->date('date_available')->nullable();
            $table->string('discount', 255)->nullable();
            $table->text('images')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->integer('user_id')->nullable();
            $table->text('user_type')->nullable();
            $table->integer('upload_folder')->nullable();
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
        Schema::drop('products');
    }
}
