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
        Schema::create('channel', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50);
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('cover_image')->nullable();
            $table->integer('etat')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel');
    }
};
