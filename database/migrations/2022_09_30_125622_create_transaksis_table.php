<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbTransaksi', function (Blueprint $table) {
            $table->id('no');
            $table->string('transaksiid');
            $table->string('username');
            $table->string('productid');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbTransaksi');
    }
};
