# Shop Eleven

A full-stack e-commerce platform built with Laravel, PHP, MySQL, JavaScript, and Blade.

Shop Eleven is a production-oriented commerce application designed to handle product discovery, cart management, order processing, administration, and WhatsApp-based checkout from a single platform.

## Overview

Shop Eleven was built to provide a complete e-commerce workflow while keeping the architecture simple, maintainable, and scalable.

The application includes both a customer-facing storefront and an authenticated administration dashboard for managing products, categories, orders, and store operations.

## Features

- 🛒 Product browsing and cart management
- 🔎 Dynamic product search and category filtering
- 📦 Product, category, and order management
- 🔐 Authenticated admin dashboard
- 📱 Responsive storefront for desktop, tablet, and mobile
- 💬 WhatsApp-based checkout and order communication
- 🖼️ Cloudinary-powered product image management
- 🔌 RESTful API endpoints for dynamic product filtering
- 🗄️ Relational database architecture using MySQL
- 🚀 Production deployment and database configuration
- 🔍 SEO foundations and sitemap generation

## Technology Stack

**Backend**
- PHP 8+
- Laravel
- MySQL
- RESTful APIs

**Frontend**
- Blade
- JavaScript
- HTML5
- CSS3
- Responsive design

**Infrastructure & Services**
- Cloudinary
- MySQL
- Git & GitHub

## Architecture

Shop Eleven follows a Laravel-based full-stack architecture where the application handles:

- Business logic
- Database interactions
- Authentication and authorization
- Product and order management
- API endpoints
- Server-rendered Blade views

JavaScript is used where client-side interaction improves the user experience, including product filtering, search, cart functionality, and dynamic interface behaviour.

## Key Engineering Decisions

### API-driven product filtering

Product filtering and search are handled through Laravel API endpoints, allowing products to be retrieved dynamically without requiring a complete page reload.

### Relational data modeling

The application uses a relational MySQL database to model relationships between products, categories, users, carts, and orders.

### Responsive commerce experience

The storefront was designed across desktop, tablet, and mobile breakpoints, including a mobile-first navigation and cart experience.

### WhatsApp checkout

Instead of relying exclusively on a traditional payment checkout flow, Shop Eleven integrates WhatsApp into the purchasing workflow, allowing customers to communicate order details directly with the business.

### Cloud-based media management

Product images are managed through Cloudinary rather than being stored directly on the application server.

## Screenshots

### Storefront

_Add screenshots of the customer-facing storefront here._

### Admin Dashboard

_Add screenshots of the authenticated admin dashboard here._

### Product Management

_Add screenshots of the product management interface here._

### Mobile Experience

_Add mobile screenshots here._

## Project Structure

```text
shop-eleven-store/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── package.json
