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
        Schema::create('pengurus_dewan_pusats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->text('jabatan_lengkap')->nullable();
            $table->string('foto')->nullable();
            $table->string('kategori')->nullable(); // Pengurus Pusat Nuris 1, Pengurus Pusat Nuris 2, dll
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
        Schema::dropIfExists('pengurus_dewan_pusats');
    }
};
