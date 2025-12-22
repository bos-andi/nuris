<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
        
        // Insert default settings
        DB::table('site_settings')->insert([
            ['key' => 'site_name', 'value' => 'PP. Nurul Islam', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'site_description', 'value' => 'Pondok Pesantren Nurul Islam Mojokerto - Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'hero_logo', 'value' => null, 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'favicon', 'value' => 'img/logo/nuris-favicon.png', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'og_image', 'value' => null, 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'og_title', 'value' => 'PP. Nurul Islam - Pondok Pesantren Nurul Islam Mojokerto', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'og_description', 'value' => 'Pondok Pesantren Nurul Islam Mojokerto - Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'og_url', 'value' => config('app.url'), 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'twitter_card', 'value' => 'summary_large_image', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
