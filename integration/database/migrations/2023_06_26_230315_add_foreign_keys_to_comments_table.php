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
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign(['user'], 'comments_ibfk_1')->references(['id'])->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['article'], 'comments_ibfk_2')->references(['id'])->on('article')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['video'], 'comments_ibfk_3')->references(['id'])->on('video')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_ibfk_1');
            $table->dropForeign('comments_ibfk_2');
            $table->dropForeign('comments_ibfk_3');
        });
    }
};
