# Quick Deployment - 5 Minutes Setup

## Easiest Option: Railway (Recommended)

### Step 1: Prepare Your Code

✅ You already have `index.php` - that's all you need!

### Step 2: Deploy to Railway

**Option A: Using GitHub (Recommended)**

1. Create a GitHub repository
2. Push your code:
   ```bash
   git init
   git add index.php Procfile composer.json
   git commit -m "Initial commit"
   git remote add origin https://github.com/yourusername/enc-dec-tool.git
   git push -u origin main
   ```
3. Go to https://railway.app
4. Click "New Project" → "Deploy from GitHub repo"
5. Select your repository
6. Railway will auto-detect PHP and deploy
7. Your app will be live at `https://your-app-name.up.railway.app`

**Option B: Using Railway CLI**

```bash
# Install Railway CLI
npm i -g @railway/cli

# Login
railway login

# Initialize project
railway init

# Deploy
railway up
```

### Step 3: Share the URL

Once deployed, share the Railway URL with your team. That's it! 🎉

---

## Alternative: Render (Also Free)

1. Go to https://render.com
2. Sign up with GitHub
3. Click "New" → "Web Service"
4. Connect your GitHub repository
5. Settings:
   - **Build Command**: (leave empty)
   - **Start Command**: `php -S 0.0.0.0:$PORT`
6. Click "Create Web Service"
7. Wait for deployment (2-3 minutes)
8. Share the URL with your team

---

## Alternative: Free Hosting (No GitHub Needed)

### 000webhost

1. Go to https://www.000webhost.com
2. Sign up (free)
3. Create a website
4. Go to File Manager → `public_html`
5. Upload `index.php`
6. Done! Access at `https://your-site.000webhostapp.com`

---

## Which Should You Choose?

- **Railway/Render**: Best for teams, automatic HTTPS, professional
- **000webhost**: Fastest setup, no GitHub needed, but has ads

**My Recommendation**: Use **Railway** - it's free, professional, and takes 5 minutes to set up!
