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
        Schema::table('history', function (Blueprint $table) {
            $table->foreign(['user'], 'history_ibfk_1')->references(['id'])->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['article'], 'history_ibfk_2')->references(['id'])->on('article')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['video'], 'history_ibfk_3')->references(['id'])->on('video')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history', function (Blueprint $table) {
            $table->dropForeign('history_ibfk_1');
            $table->dropForeign('history_ibfk_2');
            $table->dropForeign('history_ibfk_3');
        });
    }
};
