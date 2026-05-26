# 🎮 IgrencStore.id

IgrencStore.id adalah website portfolio dan management project berbasis Laravel 12 yang dibangun menggunakan Filament v3, Livewire, Docker, dan MariaDB.

Project ini dibuat untuk memenuhi tugas UTS Mata Kuliah Pemrograman Web sekaligus sebagai media pembelajaran Laravel ecosystem dan admin panel Filament v3.

---

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-v3-orange)
![PHP](https://img.shields.io/badge/PHP-8.3-purple)
![Docker](https://img.shields.io/badge/Docker-Enabled-blue)
![MariaDB](https://img.shields.io/badge/MariaDB-Database-brown)

---

# ✨ Fitur

## 🌐 Frontend
- Responsive Landing Page
- Dynamic Portfolio Website
- Dynamic Project Detail
- Contact Form
- Responsive Navigation
- Modern UI

---

## 🛠 Admin Panel
- Admin Panel Filament v3
- Authentication Login
- Dashboard Statistics
- CRUD Biodata
- CRUD Skill
- CRUD Education
- CRUD Project
- File Upload Management
- Dynamic Slug URL
- Upload PDF Project

---

## 📊 Dashboard
Dashboard admin menampilkan:
- Total Project
- Total Skill
- Total Education
- Total Contact Message

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

- Laravel 12
- Filament v3
- Livewire
- Blade
- MariaDB
- Docker
- Nginx
- Tailwind CSS
- PHP 8.3

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
│   ├── routes/
│   └── storage/
├── docker-compose.yml
├── LICENSE
├── .gitignore
└── README.md
```

---

# ⚙️ Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/igrencid/uts.git
cd uts
```

---

## 2. Jalankan Docker

```bash
dcu -d --build
```

Service:
- PHP 8.3
- Nginx
- MariaDB

---

## 3. Masuk Container PHP

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
dca key:generate
```

---

## 6. Migration dan Seeder

```bash
dca migrate:fresh --seed
```

Seeder digunakan untuk:
- Membuat akun admin
- Membuat sample project
- Membuat sample skill
- Membuat sample education

---

## 7. Storage Link

```bash
dca storage:link
```

Digunakan agar file upload seperti thumbnail dan PDF dapat diakses melalui browser.

---

# 🚀 Menjalankan Project

## Frontend Website

```text
https://uts.test
```

---

## Admin Panel

```text
https://uts.test/admin
```

---

# 🔐 Demo Login

## 👑 Super Admin

```text
Email    : admin@admin.com
Password : password
```

Akses:
- Full CRUD
- Dashboard
- Upload File
- Manage Portfolio

---

# 📁 Resource Filament

## Biodata Resource
Digunakan untuk mengelola:
- Nama
- Foto
- Deskripsi profile

---

## Skill Resource
Digunakan untuk:
- Skill developer
- Persentase skill
- Kategori skill

---

## Education Resource
Digunakan untuk:
- Riwayat pendidikan
- Nama institusi
- Tahun pendidikan

---

## Project Resource
Digunakan untuk:
- Upload thumbnail
- Upload PDF
- Dynamic slug
- Detail project

---

# 🧪 Workflow Development

## Membuat Resource Baru

```bash
dcm Project
```

Command akan membuat:
- Model
- Migration
- Seeder
- Controller
- Filament Resource

---

## Migration

```bash
dca migrate
```

---

## Seeder

```bash
dca db:seed
```

---

## Menjalankan Docker

```bash
dcu -d
```

---

## Mematikan Docker

```bash
dcd
```

---

# 🧪 Testing

```bash
dca test
```

Testing digunakan untuk memastikan:
- Routing berjalan normal
- Database migration berhasil
- Authentication berjalan
- CRUD resource berjalan baik

---

# 🗄 Database

Table utama:
- users
- biodata
- skills
- education
- projects
- contact_messages

---

# 🔒 Security

Implementasi keamanan:
- `.env` tidak di-push ke GitHub
- Menggunakan `.gitignore`
- Authentication login
- File validation upload

---

# 📌 Catatan

- Pastikan Docker Desktop berjalan
- Pastikan domain `uts.test` sudah diarahkan ke localhost
- Gunakan browser terbaru

---

# 🚀 Pengembangan Selanjutnya

- Shopping Cart
- Midtrans Payment Gateway
- Search & Filter
- Activity Log
- Deployment
- Multi Role Permission

---

# 🤝 Contribution

1. Fork repository
2. Create new branch
3. Commit perubahan
4. Push branch
5. Open pull request

---

# 👨‍💻 Developer

Muhamad Ilham Suparno  
Universitas Esa Unggul  
NIM: 20240803049

---

# 📜 License

MIT License

---

# ⭐ Repository

```text
https://github.com/igrencid/uts
```