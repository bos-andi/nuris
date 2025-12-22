#!/bin/bash

# Script Setup Awal VPS Ubuntu untuk Laravel NURIS
# Usage: sudo ./setup-vps-ubuntu.sh

set -e

echo "🚀 Setting up VPS Ubuntu for NURIS Laravel Application..."
echo ""

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m'

# Check if running as root
if [ "$EUID" -ne 0 ]; then 
    echo -e "${RED}Please run as root or with sudo${NC}"
    exit 1
fi

# Update system
echo "📦 Updating system packages..."
apt update && apt upgrade -y
echo -e "${GREEN}✓ System updated${NC}"

# Install PHP 8.3
echo ""
echo "🐘 Installing PHP 8.3..."
apt install -y software-properties-common
add-apt-repository ppa:ondrej/php -y
apt update
apt install -y php8.3 php8.3-fpm php8.3-cli php8.3-common php8.3-mysql php8.3-zip php8.3-gd php8.3-mbstring php8.3-curl php8.3-xml php8.3-bcmath php8.3-intl
echo -e "${GREEN}✓ PHP 8.3 installed${NC}"

# Install Composer
echo ""
echo "📦 Installing Composer..."
if [ ! -f /usr/local/bin/composer ]; then
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
    chmod +x /usr/local/bin/composer
    echo -e "${GREEN}✓ Composer installed${NC}"
else
    echo -e "${YELLOW}⚠ Composer already installed${NC}"
fi

# Install Git
echo ""
echo "📥 Installing Git..."
apt install -y git
echo -e "${GREEN}✓ Git installed${NC}"

# Install Nginx
echo ""
echo "🌐 Installing Nginx..."
apt install -y nginx
echo -e "${GREEN}✓ Nginx installed${NC}"

# Install MySQL
echo ""
echo "🗄️ Installing MySQL..."
apt install -y mysql-server
echo -e "${GREEN}✓ MySQL installed${NC}"

# Install Node.js
echo ""
echo "📦 Installing Node.js..."
curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
apt install -y nodejs
echo -e "${GREEN}✓ Node.js installed${NC}"

# Install Supervisor
echo ""
echo "👷 Installing Supervisor..."
apt install -y supervisor
echo -e "${GREEN}✓ Supervisor installed${NC}"

# Setup Firewall
echo ""
echo "🔥 Setting up firewall..."
ufw allow 'Nginx Full'
ufw allow OpenSSH
ufw --force enable
echo -e "${GREEN}✓ Firewall configured${NC}"

echo ""
echo -e "${GREEN}========================================${NC}"
echo -e "${GREEN}✅ VPS setup completed!${NC}"
echo -e "${GREEN}========================================${NC}"
echo ""
echo "Next steps:"
echo "1. Setup MySQL database (see DEPLOY_VPS_UBUNTU.md)"
echo "2. Clone repository: git clone git@github.com:bos-andi/nuris.git /var/www/nuris"
echo "3. Run deployment script: ./deploy-vps.sh"
echo "4. Configure Nginx (see nginx-nuris.conf)"
echo ""

