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
        Schema::table('staff', function (Blueprint $table) {
            $table->date('tmt')->nullable()->after('nip');
            $table->string('tempat_tanggal_lahir')->nullable()->after('tmt');
            $table->text('alamat')->nullable()->after('tempat_tanggal_lahir');
            $table->string('pendidikan_terakhir')->nullable()->after('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn(['tmt', 'tempat_tanggal_lahir', 'alamat', 'pendidikan_terakhir']);
        });
    }
};
