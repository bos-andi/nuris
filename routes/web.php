<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\SlideshowController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\UnitKhidmahController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\StaffController as PublicStaffController;

// Public routes
Route::get('/', [PagesController::class, 'index'])->name('pages.index');

// Sitemap route
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

// Articles routes
Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');

// Gallery routes (must be before dynamic routes)
Route::get('/gallery/foto', [GalleryController::class, 'photos'])->name('galleries.photos');
Route::get('/gallery/video', [GalleryController::class, 'videos'])->name('galleries.videos');
Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('galleries.show');

// Staff routes
Route::get('/data-guru-karyawan', [PublicStaffController::class, 'index'])->name('staff.index');

// PSB route (must be before dynamic routes)
Route::get('/psb', [PagesController::class, 'psb'])->name('psb');
Route::get('/psb-2026', [PagesController::class, 'psb'])->name('psb-2026');

// Dynamic route - check if article or page (must be last)
// This route handles both articles (by slug) and pages
Route::get('/{slug}', [PagesController::class, 'displayOrArticle'])->name('articles.show');

// Alias route for pages.display - for backward compatibility
Route::get('/{page}', [PagesController::class, 'displayOrArticle'])->name('pages.display');

// Admin routes - Auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
        // Protected routes
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
            
            // API for real-time visitor statistics
            Route::get('/api/visitor-stats', [AdminController::class, 'getVisitorStats'])->name('api.visitor-stats');
        
        // Pages management
        Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
        Route::get('/pages/create', [AdminController::class, 'createPage'])->name('pages.create');
        Route::post('/pages', [AdminController::class, 'storePage'])->name('pages.store');
        Route::get('/pages/{id}/edit', [AdminController::class, 'editPage'])->name('pages.edit');
        Route::put('/pages/{id}', [AdminController::class, 'updatePage'])->name('pages.update');
        Route::get('/pages/{id}/delete', [AdminController::class, 'deletePage'])->name('pages.delete');
        
        // Menu management
        Route::get('/menus', [MenuController::class, 'index'])->name('menus');
        Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
        Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
        Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
        Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
        Route::get('/menus/{id}/delete', [MenuController::class, 'delete'])->name('menus.delete');
        Route::post('/menus/update-order', [MenuController::class, 'updateOrder'])->name('menus.update-order');
        
        // Articles management
        Route::get('/articles', [AdminArticleController::class, 'index'])->name('articles');
        Route::get('/articles/create', [AdminArticleController::class, 'create'])->name('articles.create');
        Route::post('/articles', [AdminArticleController::class, 'store'])->name('articles.store');
        Route::get('/articles/{id}/edit', [AdminArticleController::class, 'edit'])->name('articles.edit');
        Route::put('/articles/{id}', [AdminArticleController::class, 'update'])->name('articles.update');
        Route::get('/articles/{id}/delete', [AdminArticleController::class, 'delete'])->name('articles.delete');
        
        // Events management
        Route::get('/events', [AdminEventController::class, 'index'])->name('events');
        Route::get('/events/create', [AdminEventController::class, 'create'])->name('events.create');
        Route::post('/events', [AdminEventController::class, 'store'])->name('events.store');
        Route::get('/events/{id}/edit', [AdminEventController::class, 'edit'])->name('events.edit');
        Route::put('/events/{id}', [AdminEventController::class, 'update'])->name('events.update');
        Route::get('/events/{id}/delete', [AdminEventController::class, 'delete'])->name('events.delete');
        
        // Slideshows management
        Route::get('/slideshows', [SlideshowController::class, 'index'])->name('slideshows');
        Route::get('/slideshows/create', [SlideshowController::class, 'create'])->name('slideshows.create');
        Route::post('/slideshows', [SlideshowController::class, 'store'])->name('slideshows.store');
        Route::get('/slideshows/{id}/edit', [SlideshowController::class, 'edit'])->name('slideshows.edit');
        Route::put('/slideshows/{id}', [SlideshowController::class, 'update'])->name('slideshows.update');
        Route::get('/slideshows/{id}/delete', [SlideshowController::class, 'delete'])->name('slideshows.delete');
        
        // Facilities management
        Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities');
        Route::get('/facilities/create', [FacilityController::class, 'create'])->name('facilities.create');
        Route::post('/facilities', [FacilityController::class, 'store'])->name('facilities.store');
        Route::get('/facilities/{id}/edit', [FacilityController::class, 'edit'])->name('facilities.edit');
        Route::put('/facilities/{id}', [FacilityController::class, 'update'])->name('facilities.update');
        Route::get('/facilities/{id}/delete', [FacilityController::class, 'delete'])->name('facilities.delete');
        
        // Schedules management
        Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules');
        Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
        Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
        Route::get('/schedules/{id}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
        Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
        Route::get('/schedules/{id}/delete', [ScheduleController::class, 'delete'])->name('schedules.delete');
        
        // Staff management
        Route::get('/staff', [AdminStaffController::class, 'index'])->name('staff');
        Route::get('/staff/create', [AdminStaffController::class, 'create'])->name('staff.create');
        Route::post('/staff', [AdminStaffController::class, 'store'])->name('staff.store');
        Route::get('/staff/delete-all', [AdminStaffController::class, 'deleteAll'])->name('staff.deleteAll');
        Route::get('/staff/import', [AdminStaffController::class, 'import'])->name('staff.import');
        Route::get('/staff/template', [AdminStaffController::class, 'downloadTemplate'])->name('staff.template');
        Route::post('/staff/import', [AdminStaffController::class, 'processImport'])->name('staff.import.process');
        Route::get('/staff/{id}/edit', [AdminStaffController::class, 'edit'])->name('staff.edit');
        Route::put('/staff/{id}', [AdminStaffController::class, 'update'])->name('staff.update');
        Route::get('/staff/{id}/delete', [AdminStaffController::class, 'delete'])->name('staff.delete');
        
        // Site Settings management
        Route::get('/site-settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'index'])->name('site-settings');
        Route::put('/site-settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'update'])->name('site-settings.update');
        
        // Pengurus Yayasan management
        Route::get('/pengurus-yayasan', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'index'])->name('pengurus-yayasan');
        Route::get('/pengurus-yayasan/create', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'create'])->name('pengurus-yayasan.create');
        Route::post('/pengurus-yayasan', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'store'])->name('pengurus-yayasan.store');
        Route::get('/pengurus-yayasan/{id}/edit', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'edit'])->name('pengurus-yayasan.edit');
        Route::put('/pengurus-yayasan/{id}', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'update'])->name('pengurus-yayasan.update');
        Route::get('/pengurus-yayasan/{id}/delete', [\App\Http\Controllers\Admin\PengurusYayasanController::class, 'delete'])->name('pengurus-yayasan.delete');
        
        // Pengurus Pesantren management
        Route::get('/pengurus-pesantren', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'index'])->name('pengurus-pesantren');
        Route::get('/pengurus-pesantren/create', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'create'])->name('pengurus-pesantren.create');
        Route::post('/pengurus-pesantren', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'store'])->name('pengurus-pesantren.store');
        Route::get('/pengurus-pesantren/{id}/edit', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'edit'])->name('pengurus-pesantren.edit');
        Route::put('/pengurus-pesantren/{id}', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'update'])->name('pengurus-pesantren.update');
        Route::get('/pengurus-pesantren/{id}/delete', [\App\Http\Controllers\Admin\PengurusPesantrenController::class, 'delete'])->name('pengurus-pesantren.delete');
        
        // Pengurus Dewan Pusat management
        Route::get('/pengurus-dewan-pusat', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'index'])->name('pengurus-dewan-pusat');
        Route::get('/pengurus-dewan-pusat/create', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'create'])->name('pengurus-dewan-pusat.create');
        Route::post('/pengurus-dewan-pusat', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'store'])->name('pengurus-dewan-pusat.store');
        Route::get('/pengurus-dewan-pusat/{id}/edit', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'edit'])->name('pengurus-dewan-pusat.edit');
        Route::put('/pengurus-dewan-pusat/{id}', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'update'])->name('pengurus-dewan-pusat.update');
        Route::get('/pengurus-dewan-pusat/{id}/delete', [\App\Http\Controllers\Admin\PengurusDewanPusatController::class, 'delete'])->name('pengurus-dewan-pusat.delete');
        
        // Pengurus Unit management
        Route::get('/pengurus-unit', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'index'])->name('pengurus-unit');
        Route::get('/pengurus-unit/create', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'create'])->name('pengurus-unit.create');
        Route::post('/pengurus-unit', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'store'])->name('pengurus-unit.store');
        Route::get('/pengurus-unit/{id}/edit', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'edit'])->name('pengurus-unit.edit');
        Route::put('/pengurus-unit/{id}', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'update'])->name('pengurus-unit.update');
        Route::get('/pengurus-unit/{id}/delete', [\App\Http\Controllers\Admin\PengurusUnitController::class, 'delete'])->name('pengurus-unit.delete');
        
        // Unit Khidmah management
        Route::get('/unit-khidmah', [UnitKhidmahController::class, 'index'])->name('unit-khidmah.index');
        Route::get('/unit-khidmah/create', [UnitKhidmahController::class, 'create'])->name('unit-khidmah.create');
        Route::post('/unit-khidmah', [UnitKhidmahController::class, 'store'])->name('unit-khidmah.store');
        Route::get('/unit-khidmah/{id}/edit', [UnitKhidmahController::class, 'edit'])->name('unit-khidmah.edit');
        Route::put('/unit-khidmah/{id}', [UnitKhidmahController::class, 'update'])->name('unit-khidmah.update');
        Route::get('/unit-khidmah/{id}/delete', [UnitKhidmahController::class, 'delete'])->name('unit-khidmah.delete');
        
        // Program Unggulan management
        Route::get('/program-unggulan', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'index'])->name('program-unggulan.index');
        Route::get('/program-unggulan/create', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'create'])->name('program-unggulan.create');
        Route::post('/program-unggulan', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'store'])->name('program-unggulan.store');
        Route::get('/program-unggulan/{id}/edit', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'edit'])->name('program-unggulan.edit');
        Route::put('/program-unggulan/{id}', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'update'])->name('program-unggulan.update');
        Route::get('/program-unggulan/{id}/delete', [\App\Http\Controllers\Admin\ProgramUnggulanController::class, 'delete'])->name('program-unggulan.delete');
        
        // System Update (Superadmin only)
        Route::get('/system-update', [\App\Http\Controllers\Admin\SystemUpdateController::class, 'index'])->name('system-update.index');
        Route::post('/system-update', [\App\Http\Controllers\Admin\SystemUpdateController::class, 'update'])->name('system-update.update');
        Route::get('/system-update/{id}/detail', [\App\Http\Controllers\Admin\SystemUpdateController::class, 'detail'])->name('system-update.detail');
        
        // Gallery management
        Route::get('/galleries', [AdminGalleryController::class, 'index'])->name('galleries.index');
        Route::get('/galleries/create', [AdminGalleryController::class, 'create'])->name('galleries.create');
        Route::post('/galleries', [AdminGalleryController::class, 'store'])->name('galleries.store');
        Route::get('/galleries/{id}/edit', [AdminGalleryController::class, 'edit'])->name('galleries.edit');
        Route::put('/galleries/{id}', [AdminGalleryController::class, 'update'])->name('galleries.update');
        Route::get('/galleries/{id}/delete', [AdminGalleryController::class, 'delete'])->name('galleries.delete');
    });
});
