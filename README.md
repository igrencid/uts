# 🎮 IgrencStore.id

Website portfolio dan management project berbasis Laravel 12 yang dibangun menggunakan Filament v3, Livewire, Docker, dan MariaDB.

Project ini dibuat untuk memenuhi tugas UTS Mata Kuliah Pemrograman Web sekaligus sebagai media pembelajaran pengembangan aplikasi modern berbasis Laravel ecosystem.  
Seluruh data website dapat dikelola secara dinamis melalui admin panel Filament tanpa perlu mengubah source code secara langsung.

Selain sebagai portfolio website, project ini juga dirancang sebagai fondasi awal online game item store yang nantinya akan dikembangkan menjadi sistem e-commerce digital.

---

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Filament](https://img.shields.io/badge/Filament-v3-orange)
![PHP](https://img.shields.io/badge/PHP-8.3-purple)
![Docker](https://img.shields.io/badge/Docker-Enabled-blue)
![MariaDB](https://img.shields.io/badge/MariaDB-Database-brown)

---

# 📌 Tentang Project

IgrencStore.id merupakan website portfolio dinamis yang memiliki sistem management data berbasis admin panel Filament v3.  
Admin dapat mengelola seluruh data website seperti biodata, skill, pendidikan, project, serta upload thumbnail dan laporan project dalam format PDF.

Project ini menggunakan pendekatan fullstack Laravel ecosystem dengan kombinasi:
- Laravel 12
- Filament v3
- Livewire
- Blade
- MariaDB
- Docker

Seluruh sistem dirancang agar mudah dikembangkan dan scalable untuk pengembangan fitur berikutnya.

---

# ✨ Fitur Utama

## 🌐 Frontend Website
- Responsive Landing Page
- Dynamic Portfolio Website
- Dynamic Project Detail Page
- Contact Form
- Responsive Navigation
- Modern UI Design
- Dynamic Data Rendering

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
- PDF Upload Support

---

## 📂 Sistem Project
Setiap project mendukung:
- Thumbnail Project
- Detail Description
- Upload PDF Laporan
- Tech Stack
- Status Badge
- Dynamic Slug
- Preview Detail Project

---

## 📊 Dashboard Widget
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

| Technology | Description |
|---|---|
| Laravel 12 | Backend Framework |
| Filament v3 | Admin Panel Framework |
| Livewire | Dynamic Laravel Component |
| Blade | Laravel Templating Engine |
| MariaDB | Database Management System |
| Docker | Container Development |
| Nginx | Web Server |
| PHP 8.3 | Backend Language |
| Tailwind CSS | Frontend Styling |

---

# 🧠 Arsitektur Sistem

## Frontend
Frontend dibangun menggunakan:
- Blade
- Livewire
- HTML
- CSS
- JavaScript
- Tailwind CSS

Frontend bertugas untuk:
- Menampilkan portfolio
- Menampilkan detail project
- Menampilkan contact form
- Menampilkan data dinamis dari database

---

## Backend
Backend menggunakan:
- Laravel 12
- Filament v3
- Eloquent ORM

Backend bertugas untuk:
- Mengelola CRUD data
- Authentication login
- File upload
- Dashboard management
- Routing system
- Database management

---

## Database
Database menggunakan:
- MariaDB

Database menyimpan:
- Biodata
- Skill
- Education
- Project
- Contact Message

---

## Infrastructure
Infrastructure menggunakan:
- Docker
- Docker Compose
- Nginx

Tujuan penggunaan Docker:
- Mempermudah setup project
- Menyamakan environment development
- Mempermudah deployment
- Mengurangi konflik dependency

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

Atau menggunakan custom command:

```bash
dcu -d --build
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

## 6. Jalankan Migration dan Seeder

```bash
php artisan migrate --seed
```

Atau menggunakan custom command:

```bash
dca migrate --seed
```

---

## 7. Storage Link

```bash
php artisan storage:link
```

Atau menggunakan custom command:

```bash
dca storage:link
```

---

# 🚀 Menjalankan Project

Setelah seluruh service berjalan:

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
- Upload file
- Manage project
- Manage portfolio

---

## 👤 User

```text
Email    : user@admin.com
Password : password
```

Akses:
- Login dashboard
- Akses terbatas sesuai role

---

# 📁 Penjelasan Resource Filament

## Biodata Resource
Digunakan untuk:
- Mengelola profil pribadi
- Nama
- Foto
- Deskripsi
- Informasi profile

---

## Skill Resource
Digunakan untuk:
- Menampilkan skill developer
- Persentase skill
- Kategori skill

---

## Education Resource
Digunakan untuk:
- Menampilkan riwayat pendidikan
- Tahun pendidikan
- Nama institusi

---

## Project Resource
Digunakan untuk:
- Menambahkan project portfolio
- Upload thumbnail
- Upload PDF laporan
- Dynamic slug
- Detail project

---

# 🧪 Workflow Development

## Membuat Resource Baru

```bash
dcm Project
```

Command tersebut otomatis membuat:
- Model
- Migration
- Seeder
- Controller
- Filament Resource

---

## Menjalankan Migration

```bash
dca migrate
```

---

## Menjalankan Seeder

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

Project dapat diuji menggunakan Laravel testing command:

```bash
dca test
```

Testing digunakan untuk memastikan:
- Routing berjalan normal
- Database migration berhasil
- Authentication system berjalan
- CRUD resource berjalan dengan baik

---

# 🔄 CI/CD Workflow

Project dirancang agar dapat dikembangkan menggunakan GitHub Actions untuk automation workflow.

Contoh pengembangan CI/CD:
- Auto testing
- Auto deployment
- Code quality checking
- Build validation

Struktur workflow:

```text
.github/workflows/
```

---

# 🧭 Flow Sistem

## User Flow

```text
User membuka website
        ↓
Melihat portfolio/project
        ↓
Membuka detail project
        ↓
Mengirim contact form
```

---

## Admin Flow

```text
Admin login ke dashboard
        ↓
Mengelola biodata
        ↓
Mengelola skill
        ↓
Mengelola education
        ↓
Mengelola project
        ↓
Upload thumbnail & PDF
        ↓
Data tampil otomatis di frontend
```

---

# 🗄 Database Design

| Table | Fungsi |
|---|---|
| users | Menyimpan akun login |
| biodata | Menyimpan profile |
| skills | Menyimpan data skill |
| education | Menyimpan riwayat pendidikan |
| projects | Menyimpan portfolio project |
| contact_messages | Menyimpan pesan contact form |

---

# 📦 Seeder Demo

Seeder digunakan untuk:
- Membuat akun admin otomatis
- Membuat sample data project
- Membuat sample skill
- Membuat sample education

Menjalankan seeder:

```bash
dca db:seed
```

Atau reset database sekaligus seeder:

```bash
dca migrate:fresh --seed
```

---

# 🖼 Asset dan Upload

Project mendukung upload:
- Thumbnail image
- PDF laporan project

Storage Laravel digunakan untuk management file upload.

Membuat symbolic link storage:

```bash
dca storage:link
```

---

# 🌍 Environment Requirement

| Software | Version |
|---|---|
| PHP | 8.3 |
| Laravel | 12 |
| Docker Desktop | Latest |
| MariaDB | 11+ |
| Composer | 2+ |
| Node.js | 20+ |

---

# 📈 Future Scalability

Project dirancang agar mudah dikembangkan menjadi:
- Online Store
- Digital Marketplace
- Portfolio CMS
- Company Profile
- Game Item Marketplace

---

# 🏷 Release Version

## Current Version

```text
v1.0.0
```

Release ini mencakup:
- Dynamic portfolio
- Admin panel Filament
- CRUD management
- Docker environment
- Upload system
- Dashboard statistics

---

# 📋 Coding Standard

Project mengikuti convention:
- PSR-12
- Laravel Naming Convention
- Filament Resource Convention

Contoh naming:

```text
Model      : Project
Table      : projects
Resource   : ProjectResource
```

---

# 🧹 Repository Hygiene

Repository telah dikonfigurasi menggunakan:
- `.gitignore`
- `LICENSE`
- `README.md`

Tujuan:
- Menjaga repository tetap bersih
- Menghindari upload file sensitif
- Mempermudah collaboration

---

# 🔒 Security

Beberapa implementasi keamanan:
- Environment file tidak di-push ke GitHub
- Menggunakan `.gitignore`
- Authentication login
- File validation upload
- Database migration system

---

# 🔐 Authentication System

Authentication menggunakan:
- Laravel Authentication
- Filament Login System

Hak akses:
- Super Admin
- User

---

# 📬 Contact System

Fitur contact form digunakan untuk:
- Mengirim pesan
- Kritik dan saran
- Pertanyaan project

Pesan tersimpan langsung ke database dan dapat dikelola melalui admin panel.

---

# 🎨 UI & UX Design

Konsep design yang digunakan:
- Modern UI
- Responsive Layout
- Minimalist Design
- Dynamic Content
- Dark & Light Theme Ready

---

# 🚀 Deployment Ready

Project dapat dikembangkan untuk deployment ke:
- VPS
- Railway
- Render
- DigitalOcean
- Ubuntu Server

---

# 📚 Tujuan Pembelajaran

Project ini dibuat untuk mempelajari:
- Laravel ecosystem
- Filament v3
- CRUD system
- Authentication
- Docker environment
- Database migration
- File upload system
- Responsive web development

---

# 📌 Catatan

- Pastikan Docker Desktop berjalan sebelum menjalankan project.
- Pastikan domain `uts.test` sudah diarahkan ke localhost.
- Browser yang direkomendasikan:
  - Google Chrome
  - Microsoft Edge

---

# 🤝 Contribution

Project ini dibuat untuk pembelajaran dan pengembangan portfolio.

Langkah contribution:
1. Fork repository
2. Create new branch
3. Commit perubahan
4. Push branch
5. Open pull request

---

# 📞 Support

Apabila terdapat error atau kendala:
1. Pastikan Docker berjalan
2. Pastikan migration berhasil
3. Pastikan storage link sudah dibuat
4. Pastikan environment sudah sesuai

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

Project ini menggunakan MIT License.

---

# ⭐ GitHub Repository

```text
https://github.com/igrencid/uts
```