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
        Schema::table('slideshows', function (Blueprint $table) {
            $table->string('video_url')->nullable()->after('background_image');
            $table->enum('slide_type', ['image', 'video'])->default('image')->after('video_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('slideshows', function (Blueprint $table) {
            $table->dropColumn(['video_url', 'slide_type']);
        });
    }
};
