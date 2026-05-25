# UTS Portfolio - IgrencStore.id

Website portfolio dinamis berbasis Laravel yang dibuat untuk project UTS Pemrograman Web. Website ini menampilkan biodata, skills, pendidikan, project, dan form kontak. Data dapat dikelola melalui admin panel Filament.

## Identitas

- Nama: Muhamad Ilham Suparno
- NIM: 20240803049
- Universitas: Universitas Esa Unggul
- Mata Kuliah: Pemrograman Web

## Tech Stack

- Laravel
- Filament v3
- Livewire
- Blade
- MariaDB
- Docker
- Nginx
- PHP 8.3

## Fitur

- Halaman portfolio dinamis
- CRUD Biodata
- CRUD Skills
- CRUD Education
- CRUD Projects
- Detail project menggunakan slug
- Upload foto biodata
- Upload laporan PDF project
- Contact form
- Admin panel Filament
- Role dan permission
- Docker environment

## Struktur Project

```text
uts/
├── db/
├── nginx/
├── php/
├── public/
├── src/
│   ├── app/
│   ├── database/
│   ├── resources/
│   ├── routes/
│   └── public/
└── docker-compose.yml