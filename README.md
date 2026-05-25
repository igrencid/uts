# 🎮 IgrencStore.id - Portfolio & Game Item Store

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-v3-orange)
![Docker](https://img.shields.io/badge/Docker-Enabled-blue)
![PHP](https://img.shields.io/badge/PHP-8.3-purple)
![License](https://img.shields.io/badge/License-MIT-green)

---

# 📌 About Project

IgrencStore.id is a dynamic portfolio and online game item store project built using Laravel 12 and Filament v3.

This project was developed for the Web Programming course and demonstrates the implementation of:
- Dynamic CRUD system
- Admin panel management
- Docker environment
- Role & Permission management
- Modern responsive UI
- Portfolio project showcase

The website allows users to view portfolio projects, skills, education history, and contact information, while administrators can manage all content directly from the Filament admin dashboard.

---

# 🚀 Preview

## 🏠 Home Page

![Home](docs/home-preview.png)

---

## 🛠 Admin Dashboard

![Admin](docs/admin-preview.png)

---

## 📂 Projects Page

![Projects](docs/projects-preview.png)

---

## 📄 Project Detail

![Project Detail](docs/project-detail-preview.png)

---

# ✨ Features

- Dynamic Portfolio Website
- Filament v3 Admin Panel
- CRUD Biodata
- CRUD Skills
- CRUD Education
- CRUD Projects
- Project Thumbnail Upload
- Dynamic Slug URL
- Upload PDF Report
- Contact Form
- Dashboard Statistics Widget
- Role & Permission Management
- Responsive Modern UI
- Docker Development Environment

---

# 🛠 Tech Stack

| Technology | Description |
|---|---|
| Laravel 12 | Backend Framework |
| Filament v3 | Admin Panel |
| Livewire | Dynamic Frontend |
| Blade | Templating Engine |
| MariaDB | Database |
| Docker | Development Environment |
| Nginx | Web Server |
| PHP 8.3 | Backend Language |

---

# 🧠 Architecture

## Frontend
- Blade
- Livewire
- HTML
- CSS
- JavaScript

---

## Backend
- Laravel 12
- Filament v3
- Eloquent ORM

---

## Database
- MariaDB

---

## Infrastructure
- Docker
- Docker Compose
- Nginx

---

# 📂 Project Structure

```text
uts/
├── db/
├── docs/
├── nginx/
├── php/
├── src/
│   ├── app/
│   ├── database/
│   ├── public/
│   ├── resources/
│   └── routes/
├── docker-compose.yml
└── README.md
```

---

# ⚙️ Installation Guide

## 1. Clone Repository

```bash
git clone https://github.com/igrencid/uts.git
cd uts
```

---

## 2. Run Docker Container

```bash
docker compose up -d --build
```

Service that will run:
- PHP 8.3
- Nginx
- MariaDB

---

## 3. Enter Laravel Container

```bash
docker compose exec php bash
```

---

## 4. Install Dependency

```bash
composer install
```

---

## 5. Setup Environment

Copy environment file:

```bash
cp .env.example .env
```

Generate Laravel key:

```bash
php artisan key:generate
```

---

## 6. Run Migration & Seeder

```bash
php artisan migrate --seed
```

---

## 7. Create Storage Link

```bash
php artisan storage:link
```

---

# 🌐 Access Website

## Frontend Website

```text
https://uts.test
```

---

## Filament Admin Panel

```text
https://uts.test/admin
```

---

# 🔐 Login Account

## 👑 Super Admin

```text
Email    : admin@admin.com
Password : password
```

Full access to all systems and resources.

---

## 👤 User

```text
Email    : user@admin.com
Password : password
```

Limited access based on role permissions.

---

# 📊 Dashboard Widget

The admin dashboard includes:
- Total Projects
- Total Skills
- Total Education
- Contact Messages

---

# 📁 Dynamic Project System

Each project supports:
- Thumbnail Image
- Dynamic Slug
- Tech Stack
- PDF Report
- Status Badge
- Detailed Project Page

---

# 📚 Learning Objectives

This project was created to learn:
- Laravel MVC Architecture
- CRUD System
- Filament Admin Panel
- Database Relationship
- Docker Environment
- Dynamic Portfolio Development
- Authentication & Authorization

---

# 👨‍💻 Developer

| Name | Information |
|---|---|
| Name | Muhamad Ilham Suparno |
| NIM | 20240803049 |
| University | Universitas Esa Unggul |
| Course | Web Programming |

---

# 📌 Notes

- Make sure Docker Desktop is running.
- Make sure the `uts.test` domain is configured correctly.
- Recommended browser:
  - Google Chrome
  - Microsoft Edge

---

# 📜 License

This project is created for educational and portfolio purposes.

---

# ⭐ Repository

```text
https://github.com/igrencid/uts
```