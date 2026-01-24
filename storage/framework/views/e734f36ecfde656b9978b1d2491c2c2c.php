<?php $__env->startSection('title', 'Pengaturan Situs'); ?>

<?php $__env->startSection('content'); ?>
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Pengaturan Situs</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Kelola logo, favicon, dan meta tags untuk social media sharing</p>
    </div>
</div>

<?php if(session('success')): ?>
<div class="alert alert-success mb-4">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="card">
    <div class="p-6">
        <form action="<?php echo e(route('admin.site-settings.update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Site Information -->
                <div class="lg:col-span-2">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Informasi Situs</h5>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Nama Situs <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="site_name" value="<?php echo e(old('site_name', $settings['site_name'])); ?>" 
                           class="form-input w-full" required>
                    <?php $__errorArgs = ['site_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Deskripsi Situs
                    </label>
                    <textarea name="site_description" rows="3" 
                              class="form-input w-full"><?php echo e(old('site_description', $settings['site_description'])); ?></textarea>
                    <?php $__errorArgs = ['site_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Logo & Favicon -->
                <div class="lg:col-span-2 mt-4">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Logo & Favicon</h5>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Logo Hero Section
                    </label>
                    <?php if($settings['hero_logo']): ?>
                        <div class="mb-3">
                            <img src="<?php echo e(asset('storage/' . $settings['hero_logo'])); ?>" alt="Hero Logo" 
                                 class="w-32 h-32 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="hero_logo" accept="image/*" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP, SVG. Maks: 5MB</p>
                    <?php $__errorArgs = ['hero_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Favicon
                    </label>
                    <?php if($settings['favicon'] && strpos($settings['favicon'], 'storage/') === 0): ?>
                        <div class="mb-3">
                            <img src="<?php echo e(asset($settings['favicon'])); ?>" alt="Favicon" 
                                 class="w-16 h-16 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    <?php elseif($settings['favicon']): ?>
                        <div class="mb-3">
                            <img src="<?php echo e(asset($settings['favicon'])); ?>" alt="Favicon" 
                                 class="w-16 h-16 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="favicon" accept="image/*,.ico" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: ICO, PNG, JPG. Maks: 2MB. Ukuran disarankan: 32x32 atau 16x16</p>
                    <?php $__errorArgs = ['favicon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Open Graph / Social Media -->
                <div class="lg:col-span-2 mt-4">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Social Media Sharing (Open Graph)</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        Pengaturan ini akan muncul sebagai thumbnail ketika halaman dibagikan di Facebook, Twitter, WhatsApp, dll.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Title
                    </label>
                    <input type="text" name="og_title" value="<?php echo e(old('og_title', $settings['og_title'])); ?>" 
                           class="form-input w-full" placeholder="Judul yang muncul saat share">
                    <?php $__errorArgs = ['og_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Description
                    </label>
                    <textarea name="og_description" rows="3" 
                              class="form-input w-full" placeholder="Deskripsi yang muncul saat share"><?php echo e(old('og_description', $settings['og_description'])); ?></textarea>
                    <?php $__errorArgs = ['og_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Image (Thumbnail)
                    </label>
                    <?php if($settings['og_image']): ?>
                        <div class="mb-3">
                            <img src="<?php echo e(asset('storage/' . $settings['og_image'])); ?>" alt="OG Image" 
                                 class="w-64 h-32 object-cover border border-gray-300 rounded">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="og_image" accept="image/*" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maks: 5MB. Ukuran disarankan: 1200x630px</p>
                    <?php $__errorArgs = ['og_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG URL
                    </label>
                    <input type="url" name="og_url" value="<?php echo e(old('og_url', $settings['og_url'])); ?>" 
                           class="form-input w-full" placeholder="https://example.com">
                    <?php $__errorArgs = ['og_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Twitter Card Type
                    </label>
                    <select name="twitter_card" class="form-select w-full">
                        <option value="summary" <?php echo e(old('twitter_card', $settings['twitter_card']) == 'summary' ? 'selected' : ''); ?>>Summary</option>
                        <option value="summary_large_image" <?php echo e(old('twitter_card', $settings['twitter_card']) == 'summary_large_image' ? 'selected' : ''); ?>>Summary Large Image</option>
                    </select>
                    <?php $__errorArgs = ['twitter_card'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Pengaturan
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp8.212\htdocs\nuris\resources\views/admin/site-settings/index.blade.php ENDPATH**/ ?>