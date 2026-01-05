# Railway Deployment Guide

Your code is now on GitHub! Follow these steps to deploy on Railway:

## Step-by-Step Railway Deployment

### Step 1: Sign Up for Railway

1. Go to **https://railway.app**
2. Click **"Start a New Project"** or **"Login"**
3. Sign up using your **GitHub account** (recommended - it's the easiest way)

### Step 2: Create New Project

1. Once logged in, click **"New Project"**
2. Select **"Deploy from GitHub repo"**
3. You'll see a list of your GitHub repositories
4. Find and select **"ENC-DEC"** (or search for it)
5. Click on it

### Step 3: Configure Deployment

Railway will automatically:

- ✅ Detect it's a PHP project
- ✅ Use the `Procfile` we created
- ✅ Set up the environment
- ✅ Deploy your application

**No additional configuration needed!** Railway is smart enough to detect PHP.

### Step 4: Wait for Deployment

- Railway will start building and deploying (takes 1-2 minutes)
- You'll see logs in real-time
- Wait for "Deploy successful" message

### Step 5: Get Your URL

1. Once deployed, Railway will provide a URL like:
   - `https://enc-dec-production.up.railway.app`
2. Click on the URL or the **"Open"** button
3. Your encryption/decryption tool is now live! 🎉

### Step 6: Share with Your Team

- Copy the Railway URL
- Share it with your team members
- They can access it from anywhere!

## Custom Domain (Optional)

If you want a custom domain:

1. Go to your project settings in Railway
2. Click **"Settings"** → **"Domains"**
3. Add your custom domain
4. Railway will provide DNS instructions

## Updating Your App

Whenever you make changes:

1. Make changes to your code locally
2. Commit and push to GitHub:
   ```bash
   git add .
   git commit -m "Your update message"
   git push
   ```
3. Railway will **automatically redeploy** your app!

## Railway Dashboard

You can:

- View logs in real-time
- See deployment history
- Monitor usage
- Manage environment variables (if needed later)

## Troubleshooting

If deployment fails:

1. Check the logs in Railway dashboard
2. Ensure `Procfile` exists (✅ we already created it)
3. Verify PHP version (Railway uses latest by default)
4. Check that `index.php` is in the root directory (✅ it is)

## Free Tier Limits

Railway's free tier includes:

- $5 credit per month
- More than enough for this simple PHP app
- Automatic HTTPS
- No credit card required

---

**That's it!** Your app should be live in about 2 minutes. 🚀
