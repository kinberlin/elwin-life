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
        Schema::create('article', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('titre');
            $table->text('cover_image');
            $table->longText('bloc1')->nullable();
            $table->longText('bloc2')->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->longText('bloc3')->nullable();
            $table->integer('channel')->nullable()->index('channel');
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->text('image5')->nullable();
            $table->integer('category')->nullable()->index('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
};
