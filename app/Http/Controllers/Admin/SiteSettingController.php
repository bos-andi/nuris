<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = [
            'site_name' => SiteSetting::get('site_name', 'PP. Nurul Islam'),
            'site_description' => SiteSetting::get('site_description', ''),
            'hero_logo' => SiteSetting::get('hero_logo'),
            'favicon' => SiteSetting::get('favicon', 'img/logo/nuris-favicon.png'),
            'og_image' => SiteSetting::get('og_image'),
            'og_title' => SiteSetting::get('og_title', 'PP. Nurul Islam - Pondok Pesantren Nurul Islam Mojokerto'),
            'og_description' => SiteSetting::get('og_description', ''),
            'og_url' => SiteSetting::get('og_url', config('app.url')),
            'twitter_card' => SiteSetting::get('twitter_card', 'summary_large_image'),
        ];
        
        return view('admin.site-settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_description' => 'nullable|string',
            'hero_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:5120',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,ico,webp|max:2048',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_url' => 'nullable|url|max:500',
            'twitter_card' => 'nullable|in:summary,summary_large_image',
        ]);

        // Handle hero logo upload
        if ($request->hasFile('hero_logo')) {
            // Delete old logo if exists
            $oldLogo = SiteSetting::get('hero_logo');
            if ($oldLogo && Storage::disk('public')->exists($oldLogo)) {
                Storage::disk('public')->delete($oldLogo);
            }
            $validated['hero_logo'] = $request->file('hero_logo')->store('site-settings', 'public');
            SiteSetting::set('hero_logo', $validated['hero_logo']);
        }

        // Handle favicon upload
        if ($request->hasFile('favicon')) {
            // Delete old favicon if exists
            $oldFavicon = SiteSetting::get('favicon');
            if ($oldFavicon && strpos($oldFavicon, 'storage/') === 0 && Storage::disk('public')->exists(str_replace('storage/', '', $oldFavicon))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $oldFavicon));
            }
            $faviconPath = $request->file('favicon')->store('site-settings', 'public');
            SiteSetting::set('favicon', 'storage/' . $faviconPath);
        }

        // Handle OG image upload
        if ($request->hasFile('og_image')) {
            // Delete old OG image if exists
            $oldOgImage = SiteSetting::get('og_image');
            if ($oldOgImage && Storage::disk('public')->exists($oldOgImage)) {
                Storage::disk('public')->delete($oldOgImage);
            }
            $validated['og_image'] = $request->file('og_image')->store('site-settings', 'public');
            SiteSetting::set('og_image', $validated['og_image']);
        }

        // Update text settings
        SiteSetting::set('site_name', $validated['site_name']);
        if (isset($validated['site_description'])) {
            SiteSetting::set('site_description', $validated['site_description']);
        }
        if (isset($validated['og_title'])) {
            SiteSetting::set('og_title', $validated['og_title']);
        }
        if (isset($validated['og_description'])) {
            SiteSetting::set('og_description', $validated['og_description']);
        }
        if (isset($validated['og_url'])) {
            SiteSetting::set('og_url', $validated['og_url']);
        }
        if (isset($validated['twitter_card'])) {
            SiteSetting::set('twitter_card', $validated['twitter_card']);
        }

        return redirect()->route('admin.site-settings')->with('success', 'Pengaturan situs berhasil diperbarui.');
    }
}
