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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_pol')->constrained('kendaraan')->onDelete('cascade');
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->string('tlp_tujuan', 15);
            $table->text('alamat_tujuan');
            $table->integer('biaya_tujuan');
            $table->string('kota', 50)->default('Pontianak');
            $table->foreignId('id_penyewa')->constrained('penyewa')->onDelete('cascade');
            $table->integer('jlh_penumpang');
            $table->foreignId('id_kwitansi')->constrained('kwitansi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
    