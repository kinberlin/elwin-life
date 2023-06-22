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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id', true);
            $table->integer('user')->index('orders_ibfk_1');
            $table->string('status', 255)->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->string('payment', 50)->nullable();
            $table->double('amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
