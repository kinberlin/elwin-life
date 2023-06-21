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
        Schema::table('video', function (Blueprint $table) {
            $table->foreign(['channel'], 'video_ibfk_1')->references(['id'])->on('channel');
            $table->foreign(['category'], 'video_ibfk_2')->references(['category_id'])->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video', function (Blueprint $table) {
            $table->dropForeign('video_ibfk_1');
            $table->dropForeign('video_ibfk_2');
        });
    }
};
