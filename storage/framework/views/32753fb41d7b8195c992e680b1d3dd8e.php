<header class="app-header flex items-center px-4 gap-3">
    <button id="button-toggle-menu" class="nav-link p-2 rounded-xl hover:bg-primary/10 transition-all duration-300" type="button">
        <span class="sr-only">Menu Toggle Button</span>
        <span class="flex items-center justify-center h-7 w-7">
            <i class="mgc_menu_line text-xl text-primary"></i>
        </span>
    </button>

    <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo-box flex items-center gap-2">
        <img src="<?php echo e(asset('img/logo/nuris-logo.png')); ?>" class="h-8 w-auto dark:hidden" alt="Logo Nuris" style="max-height: 32px; object-fit: contain;">
        <img src="<?php echo e(asset('img/logo/nuris-logo.png')); ?>" class="h-8 w-auto hidden dark:block" alt="Logo Nuris" style="max-height: 32px; object-fit: contain;">
        <span class="text-base font-semibold text-gray-800 dark:text-gray-200 whitespace-nowrap">Admin Nuris</span>
    </a>

    <div class="flex-grow"></div>

    <div class="flex items-center gap-2">
        <!-- Dark Mode Toggle -->
        <button id="theme-toggle" class="nav-link p-2" type="button">
            <span class="sr-only">Toggle Theme</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_sun_line text-xl dark:hidden"></i>
                <i class="mgc_moon_line text-xl hidden dark:block"></i>
            </span>
        </button>
        
        <!-- System Update Button (Superadmin Only) -->
        <?php if(auth()->user()->role === 'superadmin'): ?>
        <a href="<?php echo e(route('admin.system-update.index')); ?>" class="nav-link p-2 relative group" title="Update System Online" style="position: relative;">
            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_refresh_2_line text-xl text-warning group-hover:text-warning/80 transition-colors"></i>
            </span>
            <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-success rounded-full border-2 border-white dark:border-gray-800 animate-pulse"></span>
            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
                Update System
            </span>
        </a>
        <?php endif; ?>
        
        <div class="relative">
            <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="mgc_user_3_line text-xl"></i>
                </span>
            </button>
            <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-48 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                <div class="px-3 py-2 border-b border-gray-200 dark:border-gray-700">
                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo e(auth()->user()->name); ?></p>
                    <p class="text-xs text-gray-500 dark:text-gray-400"><?php echo e(auth()->user()->email); ?></p>
                    <span class="text-xs px-2 py-1 bg-primary/10 text-primary rounded mt-1 inline-block"><?php echo e(ucfirst(auth()->user()->role)); ?></span>
                </div>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="w-full text-left flex items-center gap-2 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <i class="mgc_logout_line"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;
    
    // Check for saved theme preference or default to light mode
    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
        html.classList.add('dark');
    }
    
    themeToggle.addEventListener('click', function() {
        html.classList.toggle('dark');
        const theme = html.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('theme', theme);
    });
});
</script>

<?php /**PATH C:\xampp8.212\htdocs\nuris\resources\views/admin/partials/topbar.blade.php ENDPATH**/ ?>