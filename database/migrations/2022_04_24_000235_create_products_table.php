<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('pic');
            $table->integer('quantity');
            $table->timestamps();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
