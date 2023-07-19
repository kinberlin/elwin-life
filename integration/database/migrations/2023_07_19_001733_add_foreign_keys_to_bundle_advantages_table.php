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
        Schema::table('bundle_advantages', function (Blueprint $table) {
            $table->foreign(['bundle'], 'bundle_advantages_ibfk_1')->references(['id'])->on('bundles')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bundle_advantages', function (Blueprint $table) {
            $table->dropForeign('bundle_advantages_ibfk_1');
        });
    }
};
