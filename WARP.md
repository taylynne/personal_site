# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is Taylynne's personal portfolio website - a single-page application built with vanilla PHP, HTML, CSS, and JavaScript. It features a contact form with reCAPTCHA integration and email functionality using PHPMailer.

## Architecture & Structure

### Core Architecture
- **Frontend**: Vanilla HTML5, CSS3, and JavaScript with a single-page layout
- **Backend**: PHP with PHPMailer for contact form processing
- **Dependencies**: PHPMailer via Composer, Google reCAPTCHA, external CDNs (Toastify.js, Google Fonts)
- **Deployment**: Traditional web server setup with .htaccess configuration

### Key Files
- `index.php` - Main portfolio page with embedded HTML/CSS/JavaScript
- `submit.php` - Contact form processing with reCAPTCHA verification and email sending
- `assets/style.css` - All styling for the website
- `.htaccess` - Directory browsing disabled, standard web server config
- `.env` - Environment variables for SMTP and reCAPTCHA configuration (not tracked)

### Project Structure
```
personal_site/
├── assets/
│   ├── style.css          # Main stylesheet
│   └── images/            # Portfolio images and assets
├── .vscode/
│   └── sftp.json         # SFTP deployment configuration
├── vendor/               # Composer dependencies (PHPMailer)
├── index.php            # Main portfolio page
├── submit.php           # Contact form handler
├── .env                 # Environment configuration (not tracked)
├── .htaccess            # Web server configuration
└── .gitignore           # Git ignore rules
```

## Development Commands

### Environment Setup
```bash
# Install PHP dependencies
composer install

# Copy environment template (if available) or create .env manually
# Required environment variables:
# SMTP_HOST, SMTP_USERNAME, SMTP_PASSWORD, SMTP_FROM_EMAIL, SMTP_FROM_NAME, SMTP_PORT, RECAPTCHA_SECRET_KEY
```

### Local Development
```bash
# Start PHP built-in server for local development
php -S localhost:8000

# Or serve from a specific directory
php -S localhost:8000 -t .
```

### Code Quality & Testing
```bash
# Check PHP syntax
php -l index.php
php -l submit.php

# Validate HTML (if using validator tool)
# Note: index.php contains PHP includes, so direct HTML validation may require running the PHP first
```

### Deployment
```bash
# The project uses SFTP deployment (configured in .vscode/sftp.json)
# Manual deployment: Upload all files except .env to web server
# Ensure .env is configured on the server with proper SMTP and reCAPTCHA credentials
```

## Environment Configuration

The application requires a `.env` file with the following variables:
- `SMTP_HOST` - SMTP server hostname
- `SMTP_USERNAME` - SMTP authentication username
- `SMTP_PASSWORD` - SMTP authentication password
- `SMTP_FROM_EMAIL` - Email address for sending contact form submissions
- `SMTP_FROM_NAME` - Display name for outgoing emails
- `SMTP_PORT` - SMTP server port (typically 465 for SMTPS)
- `RECAPTCHA_SECRET_KEY` - Google reCAPTCHA secret key for form validation

## Important Development Notes

### Contact Form Integration
- The contact form uses Google reCAPTCHA v2 for spam protection
- Form submissions are processed via AJAX to `submit.php`
- Success/error notifications use Toastify.js for user feedback
- Email sending uses PHPMailer with SMTP authentication

### Styling Architecture
- Single CSS file (`assets/style.css`) contains all styles
- Uses CSS Grid and Flexbox for responsive layout
- External fonts loaded from Google Fonts (Montserrat, Caveat)
- CSS custom properties for color theming with purple/blue gradient theme

### JavaScript Functionality
- Form submission handling with fetch API
- reCAPTCHA integration and reset functionality
- Toast notifications for user feedback
- All JavaScript is embedded in `index.php` (no separate JS files)

### Security Considerations
- Directory browsing disabled via .htaccess
- Environment variables stored in .env (not tracked in git)
- reCAPTCHA verification required for form submissions
- Email validation and sanitization in PHP backend

## Common Development Tasks

### Adding New Sections
1. Add new section HTML in `index.php` following the existing section pattern
2. Add corresponding navigation link in the nav ul
3. Style the new section in `assets/style.css`
4. Ensure responsive design works across devices

### Modifying Contact Form
1. Update form fields in `index.php` within the contact form
2. Modify `submit.php` to handle new form data
3. Update JavaScript validation and submission handling
4. Test email functionality with new fields

### Updating Styles
- All styles are in `assets/style.css`
- The site uses a mobile-first responsive design approach
- Color scheme is primarily purple/blue gradient with white cards
- Icons are from Heroicons (embedded as SVG)