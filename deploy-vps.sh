#!/bin/bash

# Script Deployment untuk VPS Ubuntu
# Usage: ./deploy-vps.sh

set -e  # Exit on error

echo "🚀 Starting deployment to VPS..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Configuration
PROJECT_PATH="/var/www/nuris"
BRANCH="main"

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}Error: artisan file not found. Are you in the Laravel project directory?${NC}"
    exit 1
fi

echo -e "${GREEN}✓ Laravel project detected${NC}"

# Step 1: Git Pull
echo ""
echo "📥 Step 1: Pulling latest changes from Git..."
if git pull origin $BRANCH; then
    echo -e "${GREEN}✓ Git pull successful${NC}"
else
    echo -e "${YELLOW}⚠ Git pull failed, trying master branch...${NC}"
    if git pull origin master; then
        echo -e "${GREEN}✓ Git pull successful (master branch)${NC}"
    else
        echo -e "${RED}✗ Git pull failed${NC}"
        exit 1
    fi
fi

# Step 2: Install/Update Dependencies
echo ""
echo "📦 Step 2: Installing/updating dependencies..."
if composer install --no-dev --optimize-autoloader --no-interaction; then
    echo -e "${GREEN}✓ Dependencies installed${NC}"
else
    echo -e "${RED}✗ Composer install failed${NC}"
    exit 1
fi

# Step 3: Run Migrations
echo ""
echo "🗄️ Step 3: Running database migrations..."
if php artisan migrate --force; then
    echo -e "${GREEN}✓ Migrations completed${NC}"
else
    echo -e "${YELLOW}⚠ Migration failed, but continuing...${NC}"
fi

# Step 4: Clear Cache
echo ""
echo "🧹 Step 4: Clearing cache..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
echo -e "${GREEN}✓ Cache cleared${NC}"

# Step 5: Optimize
echo ""
echo "⚡ Step 5: Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
echo -e "${GREEN}✓ Application optimized${NC}"

# Step 6: Set Permissions
echo ""
echo "🔐 Step 6: Setting permissions..."
sudo chown -R www-data:www-data $PROJECT_PATH
sudo chmod -R 755 $PROJECT_PATH
sudo chmod -R 775 $PROJECT_PATH/storage
sudo chmod -R 775 $PROJECT_PATH/bootstrap/cache
echo -e "${GREEN}✓ Permissions set${NC}"

# Step 7: Restart Services (if needed)
echo ""
echo "🔄 Step 7: Restarting services..."
sudo systemctl reload php8.3-fpm 2>/dev/null || echo -e "${YELLOW}⚠ PHP-FPM reload skipped${NC}"
sudo systemctl reload nginx 2>/dev/null || echo -e "${YELLOW}⚠ Nginx reload skipped${NC}"

echo ""
echo -e "${GREEN}========================================${NC}"
echo -e "${GREEN}✅ Deployment completed successfully!${NC}"
echo -e "${GREEN}========================================${NC}"
echo ""

