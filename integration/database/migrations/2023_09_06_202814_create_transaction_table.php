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
        Schema::create('transaction', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('transaction_reference');
            $table->string('status', 100);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->integer('bundle')->nullable()->index('bundle');
            $table->integer('product')->nullable()->index('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
