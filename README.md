# HM Enterprise Oman — Laravel Ecommerce Starter

This is a complete starter structure for the HM Enterprise bedsheet store.

## Included
- Laravel PHP MVC structure
- Product catalogue and categories
- Session cart
- Checkout form
- Unique order tracking IDs such as `HM-261004-AB12CD`
- Order tracking page
- WhatsApp direct ordering
- English / Arabic / Urdu language switching
- Oman pricing in OMR
- Responsive CSS
- Your supplied homepage image is included as `public/images/hero.png`
- SQLite database
- Product and order migrations
- Seed data for the 10 visible products

## Install

1. Create a fresh Laravel project:
   `composer create-project laravel/laravel hm-enterprise`
2. Copy these files into the project, replacing matching files.
3. Copy `.env.example` to `.env`.
4. Run:
   `php artisan key:generate`
5. Create the SQLite database:
   `touch database/database.sqlite`
   (On Windows, create an empty file named `database.sqlite` inside `database/`.)
6. Put your real WhatsApp number in `.env`:
   `WHATSAPP_NUMBER=968XXXXXXXX`
7. Run:
   `php artisan migrate --seed`
8. Start:
   `php artisan serve`

Open `http://127.0.0.1:8000`.

## Important
The WhatsApp links are ready, but you must replace the placeholder Oman number with the actual business WhatsApp number.

## Production upgrades recommended
- Laravel Breeze/Fortify for admin login
- Admin product/order CRUD
- Real payment gateway
- Image upload/storage
- Stock/inventory
- Customer accounts
- Email/SMS/WhatsApp API notifications
- Order status admin controls
- CSRF/rate limiting and server-side validation
