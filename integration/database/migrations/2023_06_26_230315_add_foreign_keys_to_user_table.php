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
        Schema::table('user', function (Blueprint $table) {
            $table->foreign(['role'], 'user_ibfk_1')->references(['id'])->on('role');
            $table->foreign(['status'], 'user_ibfk_2')->references(['id'])->on('status');
            $table->foreign(['referrer'], 'user_ibfk_3')->references(['id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign('user_ibfk_1');
            $table->dropForeign('user_ibfk_2');
            $table->dropForeign('user_ibfk_3');
        });
    }
};
