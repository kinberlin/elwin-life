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
        Schema::create('pubs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('image');
            $table->text('description')->nullable();
            $table->date('begin');
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->date('end');
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
        Schema::dropIfExists('pubs');
    }
};
