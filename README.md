# Laravel Mini Blog Application

A simple mini blog application built using Laravel that demonstrates authentication, authorization, and CRUD functionality.

---

## Features

- User Registration & Login (session-based authentication)
- Create, Edit, and Delete Blog Posts
- Authorization: only the post owner can edit or delete their posts
- Laravel MVC architecture
- Eloquent ORM for database interaction
- CSRF protection and server-side validation

---

## Tech Stack

- PHP 8+
- Laravel 12
- MySQL / SQLite
- Blade Templating Engine
- Git & GitHub

---

## Project Structure (Important Files)

- `app/Http/Controllers` – Application logic
- `app/Models` – Eloquent models
- `routes/web.php` – Web routes
- `resources/views` – Blade templates
- `database/migrations` – Database schema

---

## Installation & Setup

Follow these steps to run the project locally:

```bash
git clone https://github.com/JashBarbhaya/laravel-mini-blog.git
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
