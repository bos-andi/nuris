#!/bin/bash

# Script Deployment untuk VPS
# Usage: ./deploy.sh

echo "🚀 Starting deployment..."

# Pull latest changes
echo "📥 Pulling latest changes..."
git pull origin main

# Install/Update dependencies
echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader

# Clear all caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run migrations (if any)
echo "🗄️ Running migrations..."
php artisan migrate --force

# Optimize application
echo "⚡ Optimizing application..."
php artisan optimize

# Set permissions (if needed)
echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache

echo "✅ Deployment completed successfully!"

