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
        Schema::table('wishlist_items', function (Blueprint $table) {
            $table->foreign(['wishlist_id'], 'wishlist_items_ibfk_1')->references(['wishlist_id'])->on('wishlist');
            $table->foreign(['product_id'], 'wishlist_items_ibfk_2')->references(['product_id'])->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlist_items', function (Blueprint $table) {
            $table->dropForeign('wishlist_items_ibfk_1');
            $table->dropForeign('wishlist_items_ibfk_2');
        });
    }
};
