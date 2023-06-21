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
        Schema::create('partnership', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user');
            $table->text('activity')->nullable();
            $table->text('mail')->nullable();
            $table->tinyInteger('ads');
            $table->tinyInteger('vente');
            $table->text('description');
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->string('phone', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partnership');
    }
};
