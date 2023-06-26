<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('seller', 50)->nullable()->index('seller');
            $table->string('name', 50);
            $table->double('price');
            $table->integer('category_id')->index('products_ibfk_1');
            $table->text('description')->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->integer('delivery_period')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image')->nullable();
            $table->text('image1')->nullable();
            $table->integer('etat')->nullable()->default(1)->index('products_ibfk_2');
            $table->integer('channel')->nullable()->index('products_ibfk_3');
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
};
