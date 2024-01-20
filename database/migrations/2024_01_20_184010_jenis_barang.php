<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_jenis_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('nama_jenis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
    Schema::dropIfExists('tbl_jenis_barang');
    }
};
