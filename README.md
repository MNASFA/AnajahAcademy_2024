# Anajah Academy Website

A professional educational consultancy website for students interested in studying in Turkey. The platform provides comprehensive services including university admissions, student residence assistance, and ongoing academic support.

## 🌟 Features

- **Multilingual Support**: Fully supports Arabic (RTL layout)
- **Responsive Design**: Mobile-friendly interface that works across all devices
- **Service Packages**: Three tiers of service offerings (Free Pack, Mini Pack, VIP Pack)
- **Contact Form**: Integrated contact system with email notifications
- **Partner Showcase**: Interactive carousel displaying university partnerships
- **Animated Counters**: Dynamic statistics display
- **Social Media Integration**: Connected to all major social platforms

## 📋 Prerequisites

- Web server (Apache/Nginx)
- PHP 7.0 or higher
- MySQL/MariaDB database
- PHPMailer library (included)

## 🚀 Installation

1. **Clone or download the repository**
   ```bash
   git clone [repository-url]
   cd anajah-academy
   ```

2. **Database Setup**
   - Create a MySQL database named `anajah_academydb`
   - Create a table for client information:
   ```sql
   CREATE TABLE clients (
       id INT AUTO_INCREMENT PRIMARY KEY,
       Name VARCHAR(255) NOT NULL,
       Email VARCHAR(255) NOT NULL,
       Phone VARCHAR(50) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Configure Database Connection**
   - Open `process-form.php`
   - Update the database credentials:
   ```php
   $link = mysqli_connect("localhost", "your_username", "your_password", "anajah_academydb");
   ```

4. **Configure Email Settings**
   - Open `send.php`
   - Update SMTP credentials:
   ```php
   $mail->Username   = 'your-email@gmail.com';
   $mail->Password   = 'your-app-password';
   $mail->addAddress('recipient@anajahacademy.com', 'Anajah Academy');
   ```

5. **Upload Files**
   - Upload all files to your web server's public directory
   - Ensure proper file permissions are set

## 📁 Project Structure

```
anajah-academy/
├── assets/
│   └── img/              # Images and logos
├── css/
│   ├── style.css         # Main stylesheet
│   ├── header_style.css  # Header/navigation styles
│   └── normalize.css     # CSS reset
├── pages/
│   ├── contact.php       # Contact form page
│   ├── thanks.html       # Thank you page
│   ├── Error.html        # Error page
│   └── style.css         # Page-specific styles
├── PHPMailer/            # Email library
├── carousel.css          # Partner carousel styles
├── index.html            # Homepage
├── process-form.php      # Form processing
├── send.php              # Email sending
└── script.js             # JavaScript functionality
```

## 🎨 Customization

### Colors
The site uses CSS custom properties for easy color customization. Edit in any CSS file:
```css
:root {
  --first-color: #BF0436;   /* Primary red */
  --second-color: #314259;  /* Dark blue */
  --third-color: #248db5;   /* Light blue */
}
```

### Services
Edit service packages in `index.html` under the `.services_section` section.

### Partners
Add/remove partner logos in the carousel section at the bottom of `index.html`.

## 📧 Contact Form

The contact form includes:
- Name validation
- Email validation
- Phone number validation
- Message textarea
- Automatic email notification to admin
- Redirect to thank you page on success
- Duplicate email detection

## 🔧 Key Technologies

- **Frontend**: HTML5, CSS3, JavaScript
- **CSS Framework**: Bootstrap 5.0.2
- **Icons**: Font Awesome 6
- **Fonts**: Google Fonts (Kufam, Reem Kufi, Cairo)
- **Backend**: PHP
- **Email**: PHPMailer
- **Database**: MySQL

## 📱 Responsive Breakpoints

- Desktop: > 800px
- Tablet: 768px - 800px
- Mobile: < 767px

## ⚙️ Configuration Files

### Database Configuration
- File: `process-form.php`
- Default: localhost connection
- Update for production environment

### Email Configuration
- File: `send.php`
- SMTP: Gmail (port 465)
- Requires app-specific password for Gmail

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## 📞 Support

For questions or issues, contact:
- **Email**: info@anajahacademy.com
- **Phone**: +90 552 394 42 88
- **WhatsApp**: +212 661436917

## 📝 License

Copyright © 2024 Anajah Academy. All rights reserved.

## 🙏 Credits

- Design & Development: Anajah Academy Team
- Icons: Font Awesome
- Illustrations: Custom SVG graphics
- Fonts: Google Fonts

---

**Note**: Remember to update all placeholder credentials, email addresses, and database connections before deploying to production.
