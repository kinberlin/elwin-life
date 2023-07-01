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
        Schema::create('history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user')->index('history_ibfk_1');
            $table->integer('article')->nullable()->index('history_ibfk_2');
            $table->integer('video')->nullable()->index('history_ibfk_3');
            $table->timestamp('createdat')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
};
