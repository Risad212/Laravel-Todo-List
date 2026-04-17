# 🚀 Laravel Todo List Application

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8+-blue?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

A **modern Todo List CRUD application** built with Laravel.  
This project demonstrates full CRUD operations with a clean and responsive UI.

---

## 🌐 Live Demo

👉 http://127.0.0.1:8000/todos *(replace with real hosted link later)*

---

## 📸 Screenshots

### 🏠 Todo List Page
![Todo List](https://via.placeholder.com/900x400?text=Todo+List+Page)

### ➕ Create Todo Page
![Create Todo](https://via.placeholder.com/900x400?text=Create+Todo+Page)

### ✏️ Edit Todo Page
![Edit Todo](https://via.placeholder.com/900x400?text=Edit+Todo+Page)

---

## ✨ Features

- ➕ Create new todos  
- 📋 View all todos in table format  
- ✏️ Edit existing todos  
- ❌ Delete todos  
- 🎨 Clean and modern UI  
- ⚡ Fast Laravel backend  

---

## 🛠️ Tech Stack

- Laravel 10+
- PHP 8+
- MySQL
- Blade Templates
- HTML5 / CSS3

---

## 📦 Requirements

- PHP >= 8.1  
- Composer  
- MySQL  
- Git  
- Laravel CLI  

---

## 🚀 Installation & Setup

```bash
# 1. Clone repository
git clone https://github.com/YOUR_USERNAME/laravel-todo-list.git
cd laravel-todo-list

# 2. Install dependencies
composer install

# 3. Create environment file
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Configure database in .env
DB_DATABASE=todo_list
DB_USERNAME=root
DB_PASSWORD=

# 6. Run migrations
php artisan migrate

# 7. Start server
php artisan serve