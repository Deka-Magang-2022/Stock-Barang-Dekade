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
        Schema::create('stock_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang');
            $table->string('stock_sebelum');
            $table->string('stock_sesudah');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_barangs');
    }
};
