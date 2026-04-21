# Laravel Todo List Application

A simple Laravel CRUD Todo List application with authentication and AJAX-based interactions for a smooth user experience.

---

## Features

- Authentication (Login / Logout)
- Authorization (Protected Routes)
- Reusable Blade Components
- UI Components (Buttons, Tables, Forms)
- Create Todo (AJAX)
- View Todo List
- Edit Todo (AJAX)
- Delete Todo (AJAX)
- Search Todo (AJAX)
- Pagination (AJAX)
- Fully dynamic UI without page reload

---

## Installation Guide

```bash
# Clone project
git clone https://github.com/Risad212/Laravel-Todo-List.git

# Enter project directory
cd Laravel-Todo-List

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=

# Run migrations
php artisan migrate

# Start development server
php artisan serve