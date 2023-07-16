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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tx_ref', 255)->nullable()->unique('tx_ref');
            $table->double('amount')->nullable();
            $table->string('currency', 3)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('payment_type', 20)->nullable();
            $table->string('flw_ref', 255)->nullable();
            $table->string('card_type', 20)->nullable();
            $table->text('email')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('name')->nullable();
            $table->timestamp('createdat')->nullable()->useCurrent();
            $table->unsignedInteger('customer_id')->nullable();
            $table->integer('order_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
