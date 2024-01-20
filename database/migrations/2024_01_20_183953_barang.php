<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jenis');
            $table->string('nama_barang')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->integer('stok')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
    Schema::dropIfExists('tbl_barang');
    }
};
