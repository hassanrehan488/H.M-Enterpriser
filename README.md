# H.M Enterpriser — Laravel E-Commerce Website

H.M Enterpriser is an online bedsheet store designed to showcase stylish, comfortable, and elegant bedding collections. The website provides a user-friendly shopping experience with product browsing, cart management, checkout, and order tracking.

## About the Project

This project is built using Laravel and PHP to provide an e-commerce platform for the H.M Enterpriser bedsheet business, with support for English, Arabic, and Urdu languages.

## Features

- **Product Catalogue:** Browse bedsheets and product categories.
- **Shopping Cart:** Add products to a session-based cart.
- **Checkout:** Submit orders through a checkout form.
- **Order Tracking:** Track orders using unique tracking IDs.
- **WhatsApp Ordering:** Contact the business directly through WhatsApp.
- **Multilingual Support:** English, Arabic, and Urdu language switching.
- **Oman Currency:** Product pricing in Omani Rial (OMR).
- **Responsive Design:** Layout optimized for different screen sizes.
- **SQLite Database:** Lightweight database configuration.
- **Database Seeders:** Sample product data for testing.
- **Homepage Hero Image:** Includes a homepage image at `public/images/hero.png`.

## Technologies Used

- PHP
- Laravel
- HTML
- CSS
- JavaScript
- SQLite
- Blade Templates

## Installation and Setup

### Prerequisites

Make sure you have the following installed:

- PHP
- Composer
- Git
- A web browser

### 1. Clone the Repository

```bash
git clone https://github.com/hassanrehan488/H.M-Enterpriser.git
cd hm-enterprise-laravel
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment Variables

Copy `.env.example` to `.env`.

On Windows PowerShell, run:

```powershell
Copy-Item .env.example .env
```

### 4. Generate the Application Key

```bash
php artisan key:generate
```

### 5. Configure the Database

Configure SQLite in your `.env` file and create an empty database file at `database/database.sqlite` if it does not already exist.

### 6. Configure WhatsApp Ordering

Set your actual business WhatsApp number in the appropriate environment variable or application configuration. The example number is only a placeholder.

### 7. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

### 8. Start the Development Server

```bash
php artisan serve
```

Open the local URL shown in your terminal, usually:

`http://127.0.0.1:8000`

## Future Improvements

- Admin dashboard for managing products and orders.
- Product image uploads and inventory management.
- Customer accounts and order history.
- Online payment gateway integration.
- Email and SMS order notifications.
- Enhanced security and server-side validation.

## Project Purpose

The goal of H.M Enterpriser is to establish an attractive online presence for a bedsheet business and make it easier for customers to explore bedding products and place orders.

## Author

**H.M Enterpriser**

## License

No license has been specified yet. Please add a `LICENSE` file if you intend to distribute this project under a particular open-source license.

---

**H.M Enterpriser — Bringing Comfort and Style to Your Bedroom.**