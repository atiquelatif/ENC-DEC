# Deployment Guide for Encryption/Decryption Tool

This guide provides step-by-step instructions for deploying the PHP encryption/decryption tool so your team can access it.

## Quick Overview

- **File**: `index.php` (single PHP file)
- **Requirements**: PHP 7.4+ with OpenSSL extension
- **No Database**: No database setup needed
- **No Dependencies**: No Composer packages required

---

## Option 1: Free Hosting (Easiest - Recommended for Quick Setup)

### A. 000webhost (Free)

1. **Sign up**: Go to https://www.000webhost.com
2. **Create a website**: Choose a free subdomain (e.g., `yourproject.000webhostapp.com`)
3. **Upload file**:
   - Log into your account
   - Go to File Manager
   - Navigate to `public_html` folder
   - Upload `index.php` (or rename it to `index.php` if you upload as `tool.txt`)
4. **Access**: Visit `https://yourproject.000webhostapp.com`

**Pros**: Free, no credit card, easy setup
**Cons**: Limited resources, ads on free plan

### B. InfinityFree (Free, No Ads)

1. **Sign up**: Go to https://www.infinityfree.net
2. **Create account** and add a website
3. **Upload via File Manager**:
   - Go to File Manager in control panel
   - Upload `index.php` to `htdocs` folder
4. **Access**: Your site will be live at the provided subdomain

**Pros**: Free, no ads, good performance
**Cons**: Some limitations on free tier

---

## Option 2: Cloud Platforms (Best for Teams)

### A. Railway (Recommended)

1. **Sign up**: Go to https://railway.app (use GitHub account)
2. **Create new project**: Click "New Project"
3. **Deploy from GitHub**:
   - Connect your GitHub repository
   - Or use Railway CLI:

     ```bash
     # Install Railway CLI
     npm i -g @railway/cli

     # Login
     railway login

     # Initialize and deploy
     railway init
     railway up
     ```
4. **Create `Procfile`** (if deploying manually):
   ```
   web: php -S 0.0.0.0:$PORT
   ```
5. **Set PHP version**: Railway auto-detects PHP

**Pros**: Free tier, easy deployment, automatic HTTPS
**Cons**: Requires GitHub account

### B. Render

1. **Sign up**: Go to https://render.com
2. **Create new Web Service**
3. **Connect repository** or upload files
4. **Configure**:
   - **Build Command**: (leave empty)
   - **Start Command**: `php -S 0.0.0.0:$PORT`
5. **Deploy**: Click "Create Web Service"

**Pros**: Free tier, automatic HTTPS, easy setup
**Cons**: Free tier spins down after inactivity

### C. Heroku

1. **Sign up**: Go to https://www.heroku.com
2. **Install Heroku CLI**: https://devcenter.heroku.com/articles/heroku-cli
3. **Create `Procfile`**:
   ```
   web: vendor/bin/heroku-php-apache2
   ```
   Or for built-in server:
   ```
   web: php -S 0.0.0.0:$PORT
   ```
4. **Deploy**:
   ```bash
   heroku login
   heroku create your-app-name
   git init
   git add .
   git commit -m "Initial commit"
   git push heroku main
   ```

**Pros**: Reliable, good documentation
**Cons**: Free tier discontinued (paid plans only)

---

## Option 3: VPS (Most Control)

### DigitalOcean / Linode / Vultr

1. **Create a Droplet/Instance**:

   - Choose Ubuntu 22.04 LTS
   - Minimum: $5-6/month (1GB RAM)

2. **SSH into server**:

   ```bash
   ssh root@your-server-ip
   ```

3. **Install PHP and Apache/Nginx**:

   ```bash
   # Update system
   sudo apt update && sudo apt upgrade -y

   # Install PHP and Apache
   sudo apt install php php-cli php-common php-openssl apache2 -y

   # Or install Nginx
   sudo apt install php php-fpm php-openssl nginx -y
   ```

4. **Upload your file**:

   ```bash
   # For Apache
   sudo nano /var/www/html/index.php
   # Paste your code, save (Ctrl+X, Y, Enter)

   # For Nginx
   sudo nano /var/www/html/index.php
   ```

5. **Configure web server** (if using Nginx):

   ```bash
   sudo nano /etc/nginx/sites-available/default
   # Update root to /var/www/html
   sudo systemctl restart nginx
   ```

6. **Access**: Visit `http://your-server-ip`

**Pros**: Full control, scalable, professional
**Cons**: Requires server management knowledge, costs money

---

## Option 4: GitHub Pages Alternative (Static Hosting Won't Work)

❌ **Note**: GitHub Pages won't work for PHP files as it only hosts static content.

---

## Quick Setup Checklist

Before deploying, ensure:

- [ ] PHP 7.4+ is available on the server
- [ ] OpenSSL extension is enabled
- [ ] File is named `index.php`
- [ ] File permissions are correct (644 for files, 755 for directories)

---

## Testing After Deployment

1. Visit your deployed URL
2. Test encryption/decryption functionality
3. Verify all features work:
   - AES-256-CBC encryption/decryption
   - Base64 encode/decode
   - URL encode/decode

---

## Security Recommendations

1. **HTTPS**: Use HTTPS (most platforms provide it automatically)
2. **Access Control**: Consider adding basic authentication if sensitive
3. **Rate Limiting**: Some platforms provide this automatically
4. **Environment Variables**: For production keys (if you add them later)

---

## Recommended Choice

**For Quick Team Access**: Use **Railway** or **Render** (Option 2)

- Free tier available
- Easy deployment
- Automatic HTTPS
- Professional appearance
- Good for team collaboration

**For Long-term/Production**: Use **VPS** (Option 3)

- Full control
- Better performance
- More customization options

---

## Need Help?

If you encounter issues:

1. Check PHP version: `php -v`
2. Verify OpenSSL: `php -m | grep openssl`
3. Check server error logs
4. Ensure file permissions are correct
