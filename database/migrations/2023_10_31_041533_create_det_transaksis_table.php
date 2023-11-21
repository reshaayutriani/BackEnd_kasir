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
        Schema::create('det_transaksi', function (Blueprint $table) {
            $table->integer("detail_id","primary key");
            $table->integer("transaksi_id");
            $table->integer("menu_id");
            $table->double("jumlah");
            $table->double("subtotal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_transaksi');
    }
};
