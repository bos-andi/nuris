<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> | Admin PP. Nurul Islam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard PP. Nurul Islam" name="description">
    <meta content="Nuris" name="author">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/favicon.ico')); ?>">
    
    <!-- App css -->
    <link href="<?php echo e(asset('admin/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css">
    
    <!-- Icons css -->
    <link href="<?php echo e(asset('admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css">
    
    <!-- Nuris Admin Custom Theme -->
    <link href="<?php echo e(asset('admin/assets/css/nuris-admin-theme.css')); ?>" rel="stylesheet" type="text/css">
    
    <!-- Theme Config Js -->
    <script src="<?php echo e(asset('admin/assets/js/config.js')); ?>"></script>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <div class="flex wrapper">
        <?php echo $__env->make('admin.partials.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div class="page-content">
            <?php echo $__env->make('admin.partials.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <main class="flex-grow p-6">
                <?php if(session('success')): ?>
                    <div class="mb-4 p-4 bg-success/10 border border-success/20 rounded text-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                
                <?php if(session('error')): ?>
                    <div class="mb-4 p-4 bg-danger/10 border border-danger/20 rounded text-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <!-- Plugin Js -->
    <script src="<?php echo e(asset('admin/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/libs/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/libs/@frostui/tailwindcss/frostui.js')); ?>"></script>
    
    <!-- App Js -->
    <script src="<?php echo e(asset('admin/assets/js/app.js')); ?>"></script>
    
    <!-- Custom Admin Scripts -->
    <script>
        (function() {
            'use strict';
            
            // Wait for DOM and app.js to load
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    initMobileMenu();
                }, 100);
            });

            function initMobileMenu() {
                const menuToggleBtn = document.getElementById('button-toggle-menu');
                const appMenu = document.querySelector('.app-menu');
                
                // Create backdrop if doesn't exist
                let backdrop = document.getElementById('menu-backdrop');
                if (!backdrop) {
                    backdrop = document.createElement('div');
                    backdrop.className = 'fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300';
                    backdrop.id = 'menu-backdrop';
                    document.body.appendChild(backdrop);
                }

                if (!menuToggleBtn || !appMenu) return;

                // Override default behavior for mobile
                menuToggleBtn.addEventListener('click', function(e) {
                    const isMobile = window.innerWidth <= 1140;
                    
                    if (isMobile) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Toggle mobile menu
                        const isOpen = appMenu.classList.contains('menu-open');
                        const closeBtn = document.getElementById('button-close-menu');
                        
                        if (isOpen) {
                            appMenu.classList.remove('menu-open');
                            backdrop.classList.add('hidden');
                            document.body.classList.remove('overflow-hidden');
                            if (closeBtn) closeBtn.style.display = 'none';
                        } else {
                            appMenu.classList.add('menu-open');
                            backdrop.classList.remove('hidden');
                            document.body.classList.add('overflow-hidden');
                            if (closeBtn) closeBtn.style.display = 'block';
                        }
                    }
                    // Desktop behavior handled by app.js
                });

                // Mobile close button
                const closeMenuBtn = document.getElementById('button-close-menu');
                if (closeMenuBtn) {
                    closeMenuBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        appMenu.classList.remove('menu-open');
                        backdrop.classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                        closeMenuBtn.style.display = 'none';
                    });
                }

                // Close menu when clicking backdrop
                backdrop.addEventListener('click', function() {
                    appMenu.classList.remove('menu-open');
                    backdrop.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                    if (closeMenuBtn) closeMenuBtn.style.display = 'none';
                });

                // Close menu on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && appMenu.classList.contains('menu-open')) {
                        appMenu.classList.remove('menu-open');
                        backdrop.classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                    }
                });

                // Handle window resize
                let resizeTimer;
                window.addEventListener('resize', function() {
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(function() {
                        const isMobile = window.innerWidth <= 1140;
                        if (!isMobile && appMenu.classList.contains('menu-open')) {
                            appMenu.classList.remove('menu-open');
                            backdrop.classList.add('hidden');
                            document.body.classList.remove('overflow-hidden');
                        }
                    }, 250);
                });
            }
        })();
    </script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp8.212\htdocs\nuris\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>