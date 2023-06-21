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
        Schema::table('tag', function (Blueprint $table) {
            $table->foreign(['article'], 'tag_ibfk_1')->references(['id'])->on('article')->onDelete('CASCADE');
            $table->foreign(['product'], 'tag_ibfk_2')->references(['product_id'])->on('products')->onDelete('CASCADE');
            $table->foreign(['video'], 'tag_ibfk_3')->references(['id'])->on('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tag', function (Blueprint $table) {
            $table->dropForeign('tag_ibfk_1');
            $table->dropForeign('tag_ibfk_2');
            $table->dropForeign('tag_ibfk_3');
        });
    }
};
