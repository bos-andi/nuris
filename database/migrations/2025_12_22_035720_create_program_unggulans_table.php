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
        Schema::create('program_unggulans', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('video_url')->nullable();
            $table->text('video_id')->nullable();
            $table->longText('content')->nullable();
            $table->text('intro_text')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('materi')->nullable();
            $table->text('durasi')->nullable();
            $table->text('sasaran')->nullable();
            $table->text('benefit')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('pendaftaran_info')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_unggulans');
    }
};
