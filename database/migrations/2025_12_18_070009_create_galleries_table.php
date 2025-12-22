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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('type', ['photo', 'video'])->default('photo');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable(); // Untuk foto atau thumbnail video
            $table->string('video_url')->nullable(); // URL video (YouTube, Vimeo, dll)
            $table->string('video_embed_code')->nullable(); // Embed code untuk video
            $table->integer('order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
