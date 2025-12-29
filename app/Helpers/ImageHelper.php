<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    /**
     * Resize and compress image to match reference image dimensions
     * Reference: vl-team-inner-1.1.png (typically 300x400px or 3:4 ratio portrait)
     * 
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $path Storage path (e.g., 'staff', 'pengurus')
     * @param int $maxWidth Maximum width (default: 400px)
     * @param int $maxHeight Maximum height (default: 533px for 3:4 ratio)
     * @param int $quality JPEG quality (default: 85)
     * @return string|null Storage path or null on failure
     */
    public static function resizeAndCompress($file, $path = 'images', $maxWidth = 400, $maxHeight = 533, $quality = 85)
    {
        try {
            // Check if Intervention Image is available
            if (!class_exists('Intervention\Image\Facades\Image')) {
                // Fallback: just store the file without resizing
                return $file->store($path, 'public');
            }

            // Get image dimensions
            $image = Image::make($file);
            $originalWidth = $image->width();
            $originalHeight = $image->height();
            $originalRatio = $originalWidth / $originalHeight;
            
            // Target ratio is 3:4 (portrait) = 0.75
            $targetRatio = 3 / 4; // 0.75
            
            // Calculate new dimensions maintaining aspect ratio
            if ($originalRatio > $targetRatio) {
                // Image is wider than target, fit to height
                $newHeight = min($maxHeight, $originalHeight);
                $newWidth = $newHeight * $targetRatio;
            } else {
                // Image is taller than target, fit to width
                $newWidth = min($maxWidth, $originalWidth);
                $newHeight = $newWidth / $targetRatio;
            }
            
            // Ensure dimensions don't exceed max
            if ($newWidth > $maxWidth) {
                $newWidth = $maxWidth;
                $newHeight = $newWidth / $targetRatio;
            }
            if ($newHeight > $maxHeight) {
                $newHeight = $maxHeight;
                $newWidth = $newHeight * $targetRatio;
            }
            
            // Round to integers
            $newWidth = (int) round($newWidth);
            $newHeight = (int) round($newHeight);
            
            // Resize and encode
            $image->resize($newWidth, $newHeight, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize(); // Don't upscale
            });
            
            // Get file extension
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $storagePath = $path . '/' . $filename;
            
            // Save based on format
            if ($extension == 'png') {
                // For PNG, reduce colors and compress
                $image->save(storage_path('app/public/' . $storagePath), 80);
            } else {
                // For JPEG, use quality setting
                $image->save(storage_path('app/public/' . $storagePath), $quality);
            }
            
            return $storagePath;
            
        } catch (\Exception $e) {
            \Log::error('Image resize error: ' . $e->getMessage());
            // Fallback: store original file
            return $file->store($path, 'public');
        }
    }
    
    /**
     * Simple resize using GD library (fallback if Intervention Image not available)
     */
    public static function resizeWithGD($file, $path = 'images', $maxWidth = 400, $maxHeight = 533, $quality = 85)
    {
        try {
            $sourcePath = $file->getRealPath();
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $storagePath = $path . '/' . $filename;
            $destinationPath = storage_path('app/public/' . $storagePath);
            
            // Create directory if not exists
            $dir = dirname($destinationPath);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            
            // Get original image
            if ($extension == 'png') {
                $sourceImage = imagecreatefrompng($sourcePath);
            } elseif ($extension == 'jpg' || $extension == 'jpeg') {
                $sourceImage = imagecreatefromjpeg($sourcePath);
            } elseif ($extension == 'gif') {
                $sourceImage = imagecreatefromgif($sourcePath);
            } else {
                return $file->store($path, 'public');
            }
            
            $originalWidth = imagesx($sourceImage);
            $originalHeight = imagesy($sourceImage);
            $originalRatio = $originalWidth / $originalHeight;
            $targetRatio = 3 / 4; // 0.75
            
            // Calculate new dimensions
            if ($originalRatio > $targetRatio) {
                $newHeight = min($maxHeight, $originalHeight);
                $newWidth = (int) round($newHeight * $targetRatio);
            } else {
                $newWidth = min($maxWidth, $originalWidth);
                $newHeight = (int) round($newWidth / $targetRatio);
            }
            
            // Ensure dimensions don't exceed max
            if ($newWidth > $maxWidth) {
                $newWidth = $maxWidth;
                $newHeight = (int) round($newWidth / $targetRatio);
            }
            if ($newHeight > $maxHeight) {
                $newHeight = $maxHeight;
                $newWidth = (int) round($newHeight * $targetRatio);
            }
            
            // Create new image
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
            // Preserve transparency for PNG
            if ($extension == 'png') {
                imagealphablending($newImage, false);
                imagesavealpha($newImage, true);
                $transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
                imagefill($newImage, 0, 0, $transparent);
            }
            
            // Resize
            imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
            
            // Save
            if ($extension == 'png') {
                imagepng($newImage, $destinationPath, 8);
            } elseif ($extension == 'jpg' || $extension == 'jpeg') {
                imagejpeg($newImage, $destinationPath, $quality);
            } elseif ($extension == 'gif') {
                imagegif($newImage, $destinationPath);
            }
            
            // Free memory
            imagedestroy($sourceImage);
            imagedestroy($newImage);
            
            return $storagePath;
            
        } catch (\Exception $e) {
            \Log::error('GD resize error: ' . $e->getMessage());
            return $file->store($path, 'public');
        }
    }
}

