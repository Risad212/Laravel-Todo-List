# 🚀 Laravel Todo List Application

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8+-blue?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

A simple and modern **Todo List CRUD application** built with Laravel.  
This project demonstrates full **Create, Read, Update, Delete (CRUD)** functionality using Laravel Resource Controller.

---

## 🌐 Live Demo

👉 (Add your deployed link here later)

---

## 📂 GitHub Repository

👉 https://github.com/Risad212/Laravel-Todo-List.git

---

## 📸 Screenshots

### 🏠 Todo List Page
![Todo List](https://via.placeholder.com/900x400?text=Todo+List+Page)

### ➕ Create Todo
![Create Todo](https://via.placeholder.com/900x400?text=Create+Todo+Page)

### ✏️ Edit Todo
![Edit Todo](https://via.placeholder.com/900x400?text=Edit+Todo+Page)

---

## ✨ Features

- ➕ Create new todos  
- 📋 View all todos in table format  
- ✏️ Edit todos  
- ❌ Delete todos  
- 🎨 Clean UI design  
- ⚡ Fast Laravel backend  

---

## 🛠️ Tech Stack

- Laravel 10+
- PHP 8+
- MySQL
- Blade Templates
- HTML / CSS

---

## 📦 Requirements

- PHP >= 8.1  
- Composer  
- MySQL  
- Git  
- Laravel CLI  

---

## 🚀 Installation Guide

```bash
# Clone project
git clone https://github.com/Risad212/Laravel-Todo-List.git
cd Laravel-Todo-List

# Install dependencies
composer install

# Create environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure DB in .env
DB_DATABASE=todo_list
DB_USERNAME=root
DB_PASSWORD=

# Run migrations
php artisan migrate

# Start server
php artisan serve