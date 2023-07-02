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
        Schema::create('info', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->string('lat', 50);
            $table->string('lon', 50);
            $table->text('country')->nullable();
            $table->text('logo')->nullable();
            $table->text('city')->nullable();
            $table->text('name')->nullable();
            $table->double('caf')->nullable()->default(0);
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
};
