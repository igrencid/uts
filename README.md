# 🎮 IgrencStore.id

Dynamic portfolio and online game item store project built using Laravel 12, Filament v3, Livewire, Docker, and MariaDB.

Project ini dibuat untuk memenuhi tugas UTS Pemrograman Web sekaligus sebagai media pembelajaran dan pengembangan portfolio pribadi.  
Website dirancang menggunakan konsep modern dynamic website dimana seluruh data dapat dikelola langsung melalui admin panel Filament.

IgrencStore memiliki sistem management project, upload thumbnail, upload laporan PDF, dashboard statistik, contact form, dan responsive UI dengan pendekatan fullstack Laravel ecosystem.

---

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-v3-orange)
![PHP](https://img.shields.io/badge/PHP-8.3-purple)
![Docker](https://img.shields.io/badge/Docker-Enabled-blue)
![MariaDB](https://img.shields.io/badge/MariaDB-Database-brown)

---

# ✨ Fitur Utama

- Dynamic Portfolio Website
- Admin Panel Filament v3
- CRUD Biodata
- CRUD Skill
- CRUD Education
- CRUD Project
- Upload Thumbnail Project
- Dynamic Slug URL
- Upload Laporan PDF
- Dashboard Statistics Widget
- Contact Form
- Responsive Modern UI
- Docker Development Environment

---

# 🖼 Preview Project

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

# 🛠 Tech Stack

| Technology | Description |
|---|---|
| Laravel 12 | Backend Framework |
| Filament v3 | Admin Panel |
| Livewire | Dynamic Component |
| Blade | Templating Engine |
| MariaDB | Database |
| Docker | Development Environment |
| Nginx | Web Server |
| PHP 8.3 | Backend Language |

---

# 🧠 Arsitektur Sistem

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

# 📂 Struktur Project

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

# ⚙️ Panduan Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/igrencid/uts.git
cd uts
```

---

## 2. Jalankan Docker

```bash
docker compose up -d --build
```

Service yang akan berjalan:
- PHP 8.3
- Nginx
- MariaDB

---

## 3. Masuk ke Container PHP

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

```bash
cp .env.example .env
php artisan key:generate
```

---

## 6. Jalankan Migration

```bash
php artisan migrate --seed
```

---

## 7. Storage Link

```bash
php artisan storage:link
```

---

# 🌐 Akses Website

## Frontend

```text
https://uts.test
```

---

## Admin Panel

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

Akses penuh ke seluruh sistem.

---

## 👤 User

```text
Email    : user@admin.com
Password : password
```

Akses terbatas sesuai role permission.

---

# 📊 Dashboard Widget

Dashboard admin memiliki:
- Total Project
- Total Skill
- Total Education
- Total Contact Message

---

# 📁 Sistem Project Dinamis

Setiap project mendukung:
- Thumbnail Image
- Dynamic Slug
- Upload PDF
- Tech Stack
- Status Badge
- Detail Project Page

---

# 🚀 Pengembangan Selanjutnya

Fitur yang akan dikembangkan:
- Shopping Cart
- Checkout System
- Midtrans Payment Gateway
- Order Management
- Product Category
- Search & Filter
- Live Deployment

---

# 📌 Catatan

- Pastikan Docker Desktop berjalan.
- Pastikan domain `uts.test` sudah terhubung ke localhost.
- Browser yang direkomendasikan:
  - Google Chrome
  - Microsoft Edge

---

# 👨‍💻 Developer

| Nama | Informasi |
|---|---|
| Nama | Muhamad Ilham Suparno |
| NIM | 20240803049 |
| Universitas | Universitas Esa Unggul |
| Mata Kuliah | Pemrograman Web |

---

# 📜 License

Project ini dibuat untuk kebutuhan pembelajaran dan portfolio pribadi.

---

# ⭐ Repository

```text
https://github.com/igrencid/uts
```