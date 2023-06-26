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
        Schema::table('article', function (Blueprint $table) {
            $table->foreign(['channel'], 'article_ibfk_1')->references(['id'])->on('channel');
            $table->foreign(['category'], 'article_ibfk_2')->references(['category_id'])->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->dropForeign('article_ibfk_1');
            $table->dropForeign('article_ibfk_2');
        });
    }
};
