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
        Schema::create('users', function (Blueprint $table) {
            $table->string('firstname', 50);
            $table->string('phone', 50)->nullable();
            $table->text('country')->nullable();
            $table->string('BP', 50)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->string('email', 50);
            $table->string('city', 255)->nullable();
            $table->string('company', 50)->nullable();
            $table->integer('id', true);
            $table->text('adress')->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->text('image')->nullable();
            $table->text('password');
            $table->integer('role')->nullable()->default(2)->index('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
