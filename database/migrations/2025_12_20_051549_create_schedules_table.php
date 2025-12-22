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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['daily', 'weekly'])->default('daily'); // daily = harian, weekly = mingguan
            $table->string('day')->nullable(); // Untuk jadwal mingguan: Kamis, Sabtu, Ahad, dll
            $table->string('time'); // Waktu kegiatan, contoh: "03.00-04.00", "19.30-20.30"
            $table->string('activity'); // Nama kegiatan
            $table->text('notes')->nullable(); // Keterangan
            $table->integer('order')->default(0); // Urutan tampil
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
