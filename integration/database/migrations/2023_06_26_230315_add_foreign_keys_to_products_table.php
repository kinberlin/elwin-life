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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['category_id'], 'products_ibfk_1')->references(['category_id'])->on('categories')->onUpdate('CASCADE');
            $table->foreign(['etat'], 'products_ibfk_2')->references(['id'])->on('etat')->onUpdate('CASCADE');
            $table->foreign(['channel'], 'products_ibfk_3')->references(['id'])->on('channel')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_ibfk_1');
            $table->dropForeign('products_ibfk_2');
            $table->dropForeign('products_ibfk_3');
        });
    }
};
