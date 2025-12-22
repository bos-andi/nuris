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
        Schema::create('pengurus_yayasans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan'); // Ketua, Sekretaris, Bendahara, Kepala Staf, Staf Bidang Keuangan, Staf Administrasi
            $table->text('jabatan_lengkap')->nullable(); // Deskripsi jabatan lengkap
            $table->string('foto')->nullable();
            $table->string('kategori')->nullable(); // Utama, Staf Bidang Administrasi
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus_yayasans');
    }
};
