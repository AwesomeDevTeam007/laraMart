<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->string('barcode');
            $table->string('barcode_path');
            $table->string('thubmnail')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('branch_id');
            $table->smallinteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
