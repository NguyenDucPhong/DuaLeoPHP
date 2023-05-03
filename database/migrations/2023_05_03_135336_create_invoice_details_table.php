<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('id_product');
            $table->UnsignedBigInteger('id_invoice');
            $table->Integer('quantity');
            $table->Integer('price');
            $table->Integer('total');
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_invoice')->references('id')->on('invoices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
