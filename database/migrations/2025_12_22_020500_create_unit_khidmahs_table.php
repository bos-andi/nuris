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
        Schema::create('unit_khidmahs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->text('video_url')->nullable();
            $table->text('video_id')->nullable();
            $table->longText('narasi')->nullable();
            $table->text('intro_text')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('operational_hours')->nullable();
            $table->text('location')->nullable();
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
        Schema::dropIfExists('unit_khidmahs');
    }
};
