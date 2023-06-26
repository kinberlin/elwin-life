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
        Schema::table('referral', function (Blueprint $table) {
            $table->foreign(['user'], 'referral_ibfk_1')->references(['id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referral', function (Blueprint $table) {
            $table->dropForeign('referral_ibfk_1');
        });
    }
};
