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
        Schema::create('video', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('channel')->index('channel');
            $table->text('cover_image')->nullable();
            $table->longText('bloc1')->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->text('video');
            $table->string('duration', 10);
            $table->text('authors');
            $table->integer('recomended')->nullable();
            $table->text('titre');
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
        Schema::dropIfExists('video');
    }
};
