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
        Schema::table('transaction', function (Blueprint $table) {
            $table->foreign(['bundle'], 'transaction_ibfk_1')->references(['id'])->on('bundles')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['order'], 'transaction_ibfk_2')->references(['order_id'])->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->dropForeign('transaction_ibfk_1');
            $table->dropForeign('transaction_ibfk_2');
        });
    }
};
