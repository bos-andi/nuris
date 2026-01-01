<?php
/**
 * Script Batch untuk mengkonversi px ke unit relatif di SEMUA file halaman
 * 
 * Usage: php convert-all-pages.php
 */

$pagesDirectory = __DIR__ . '/resources/views/pages';

// Mapping px ke rem (base 16px = 1rem)
$pxToRem = [
    // Common font sizes dengan clamp untuk responsif
    'font-size: 11px' => 'font-size: clamp(0.625rem, 1vw, 0.6875rem)',
    'font-size: 12px' => 'font-size: clamp(0.6875rem, 1.2vw, 0.75rem)',
    'font-size: 13px' => 'font-size: clamp(0.75rem, 1.4vw, 0.8125rem)',
    'font-size: 14px' => 'font-size: clamp(0.8125rem, 1.5vw, 0.875rem)',
    'font-size: 15px' => 'font-size: clamp(0.8125rem, 1.6vw, 0.9375rem)',
    'font-size: 16px' => 'font-size: clamp(0.875rem, 1.6vw, 1rem)',
    'font-size: 18px' => 'font-size: clamp(0.875rem, 1.8vw, 1.125rem)',
    'font-size: 20px' => 'font-size: clamp(1rem, 2vw, 1.25rem)',
    'font-size: 22px' => 'font-size: clamp(1.125rem, 2.3vw, 1.375rem)',
    'font-size: 24px' => 'font-size: clamp(1.125rem, 2.5vw, 1.5rem)',
    'font-size: 28px' => 'font-size: clamp(1.25rem, 3vw, 1.75rem)',
    'font-size: 32px' => 'font-size: clamp(1.75rem, 3.5vw, 2rem)',
    'font-size: 40px' => 'font-size: clamp(2rem, 4vw, 2.5rem)',
    'font-size: 42px' => 'font-size: clamp(1.75rem, 4vw, 2.625rem)',
    'font-size: 48px' => 'font-size: clamp(2rem, 5vw, 3rem)',
    'font-size: 50px' => 'font-size: clamp(2.5rem, 5.2vw, 3.125rem)',
    'font-size: 60px' => 'font-size: clamp(3rem, 6vw, 3.75rem)',
    'font-size: 25px' => 'font-size: clamp(1.25rem, 2.6vw, 1.5625rem)',
    
    // Line height
    'line-height: 70px' => 'line-height: clamp(3.5rem, 5vw, 4.375rem)',
    
    // Max width
    'max-width: 1000px' => 'max-width: 90%',
    
    // Margin right
    'margin-right: 10px' => 'margin-right: 0.625rem',
    
    // Padding dengan clamp
    'padding: 8px' => 'padding: 0.5rem',
    'padding: 10px' => 'padding: 0.625rem',
    'padding: 12px' => 'padding: 0.75rem',
    'padding: 15px' => 'padding: 0.9375rem',
    'padding: 20px' => 'padding: 1.25rem',
    'padding: 30px' => 'padding: clamp(1.5rem, 3vw, 1.875rem)',
    'padding: 40px' => 'padding: clamp(2rem, 4vw, 2.5rem)',
    'padding: 50px' => 'padding: clamp(2.5rem, 5vw, 3.125rem)',
    'padding: 80px' => 'padding: clamp(4rem, 6vw, 5rem)',
    'padding: 100px' => 'padding: clamp(5rem, 8vw, 6.25rem)',
    'padding: 120px' => 'padding: clamp(6rem, 10vw, 7.5rem)',
    
    // Padding top/bottom combinations
    'padding: 100px 0' => 'padding: clamp(5rem, 8vw, 6.25rem) 0',
    'padding: 80px 0' => 'padding: clamp(4rem, 6vw, 5rem) 0',
    'padding: 50px 0' => 'padding: clamp(2.5rem, 5vw, 3.125rem) 0',
    
    // Margin
    'margin-bottom: 8px' => 'margin-bottom: 0.5rem',
    'margin-bottom: 15px' => 'margin-bottom: 0.9375rem',
    'margin-bottom: 20px' => 'margin-bottom: 1.25rem',
    'margin-top: 80px' => 'margin-top: clamp(4rem, 6vw, 5rem)',
    'margin-right: 8px' => 'margin-right: 0.5rem',
    'margin-right: 20px' => 'margin-right: 1.25rem',
    'margin-left: 15px' => 'margin-left: 0.9375rem',
    'margin-left: 30px' => 'margin-left: 1.875rem',
    
    // Width/Height dengan clamp atau vw
    'width: 70px' => 'width: clamp(3.5rem, 5vw, 4.375rem)',
    'height: 70px' => 'height: clamp(3.5rem, 5vw, 4.375rem)',
    'width: 40px' => 'width: clamp(2rem, 3vw, 2.5rem)',
    'height: 40px' => 'height: clamp(2rem, 3vw, 2.5rem)',
    'height: 250px' => 'height: clamp(12.5rem, 20vw, 15.625rem)',
    'height: 300px' => 'height: clamp(15rem, 25vw, 18.75rem)',
    'height: 220px' => 'height: clamp(11rem, 18vw, 13.75rem)',
    'width: 300px' => 'width: clamp(15vw, 25vw, 18.75rem)',
    'height: 300px' => 'height: clamp(15vw, 25vw, 18.75rem)',
    'width: 400px' => 'width: clamp(20vw, 30vw, 25rem)',
    'height: 400px' => 'height: clamp(20vw, 30vw, 25rem)',
    'width: 500px' => 'width: clamp(25vw, 35vw, 31.25rem)',
    'height: 500px' => 'height: clamp(25vw, 35vw, 31.25rem)',
    
    // Border radius
    'border-radius: 8px' => 'border-radius: 0.5rem',
    'border-radius: 12px' => 'border-radius: 0.75rem',
    'border-radius: 16px' => 'border-radius: clamp(0.9375rem, 2vw, 1rem)',
    'border-radius: 20px' => 'border-radius: clamp(1rem, 2vw, 1.25rem)',
    'border-radius: 50px' => 'border-radius: clamp(2rem, 4vw, 3.125rem)',
    
    // Box shadow
    'box-shadow: 0 4px 20px' => 'box-shadow: 0 0.25rem 1.25rem',
    'box-shadow: 0 10px 30px' => 'box-shadow: 0 0.625rem 1.875rem',
    'box-shadow: 0 10px 40px' => 'box-shadow: 0 0.625rem 2.5rem',
    'box-shadow: 0 20px 60px' => 'box-shadow: 0 1.25rem 3.75rem',
    'box-shadow: 0 8px 30px' => 'box-shadow: 0 0.5rem 1.875rem',
    'box-shadow: 0 12px 40px' => 'box-shadow: 0 0.75rem 2.5rem',
    'box-shadow: 0 15px 50px' => 'box-shadow: 0 0.9375rem 3.125rem',
    'box-shadow: 0 6px 20px' => 'box-shadow: 0 0.375rem 1.25rem',
    'box-shadow: 0 4px 15px' => 'box-shadow: 0 0.25rem 0.9375rem',
    'box-shadow: 0 2px 8px' => 'box-shadow: 0 0.125rem 0.5rem',
    
    // Letter spacing
    'letter-spacing: 1px' => 'letter-spacing: 0.0625rem',
    'letter-spacing: 2px' => 'letter-spacing: 0.125rem',
    
    // Text shadow
    'text-shadow: 0 2px 8px' => 'text-shadow: 0 0.125rem 0.5rem',
    'text-shadow: 0 2px 10px' => 'text-shadow: 0 0.125rem 0.625rem',
    
    // Gap
    'gap: 8px' => 'gap: 0.5rem',
    'gap: 10px' => 'gap: 0.625rem',
    'gap: 12px' => 'gap: 0.75rem',
    'gap: 15px' => 'gap: 0.9375rem',
    'gap: 6px' => 'gap: 0.375rem',
    
    // Padding combinations
    'padding: 30px 20px' => 'padding: clamp(1.5rem, 3vw, 1.875rem) 1.25rem',
    'padding: 12px 24px' => 'padding: 0.75rem 1.5rem',
    'padding: 15px 30px' => 'padding: clamp(0.9375rem, 2vw, 1.125rem) clamp(1.5rem, 3vw, 1.875rem)',
    'padding: 18px 40px' => 'padding: clamp(1rem, 2vw, 1.125rem) clamp(2rem, 4vw, 2.5rem)',
    'padding: 8px 16px' => 'padding: 0.5rem 1rem',
    'padding: 6px 12px' => 'padding: 0.375rem 0.75rem',
    
    // Top/Right/Bottom/Left positions
    'top: 20px' => 'top: 1.25rem',
    'right: 20px' => 'right: 1.25rem',
    'top: 15px' => 'top: 0.9375rem',
    'right: 15px' => 'right: 0.9375rem',
    'left: 15px' => 'left: 0.9375rem',
    'top: -50px' => 'top: -3.125rem',
    'right: -50px' => 'right: -3.125rem',
    'bottom: -100px' => 'bottom: -6.25rem',
    'left: -100px' => 'left: -6.25rem',
    'top: -100px' => 'top: -6.25rem',
    'right: -100px' => 'right: -6.25rem',
    'bottom: -150px' => 'bottom: -9.375rem',
    'left: -150px' => 'left: -9.375rem',
];

function convertFile($filePath, $pxToRem) {
    echo "Processing: {$filePath}\n";
    
    if (!file_exists($filePath)) {
        echo "  Error: File not found\n";
        return false;
    }
    
    // Read file
    $content = file_get_contents($filePath);
    $originalContent = $content;
    
    // Apply direct replacements
    foreach ($pxToRem as $px => $rem) {
        $content = str_replace($px, $rem, $content);
    }
    
    // Skip if no changes
    if ($content === $originalContent) {
        echo "  No changes needed\n";
        return true;
    }
    
    // Create backup
    $backupPath = $filePath . '.backup.' . date('YmdHis');
    file_put_contents($backupPath, $originalContent);
    echo "  Backup created: " . basename($backupPath) . "\n";
    
    // Write converted content
    file_put_contents($filePath, $content);
    echo "  ✓ Conversion complete!\n";
    
    return true;
}

// Get all blade files in pages directory (exclude admin and already converted files)
$files = glob($pagesDirectory . '/*.blade.php');
$filesToProcess = [];

// Filter out admin files and already converted files
$excludeFiles = ['index.blade.php', 'psb-2026.blade.php']; // index and psb-2026 already converted

foreach ($files as $file) {
    $basename = basename($file);
    if (!in_array($basename, $excludeFiles)) {
        $filesToProcess[] = $file;
    }
}

echo "=== Converting px to responsive units ===\n";
echo "Total files to process: " . count($filesToProcess) . "\n\n";

$processed = 0;
$errors = 0;

foreach ($filesToProcess as $file) {
    if (convertFile($file, $pxToRem)) {
        $processed++;
    } else {
        $errors++;
    }
    echo "\n";
}

echo "=== Summary ===\n";
echo "Processed: {$processed}\n";
echo "Errors: {$errors}\n";
echo "Done! Please review the changes.\n";

