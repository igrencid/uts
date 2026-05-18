@props(['biodata', 'projects'])

@php
    $profileImage = asset('images/profile.jpg');

    $hardSkills = [
        ['name' => 'Laravel', 'percentage' => 90],
        ['name' => 'Filament v3', 'percentage' => 85],
        ['name' => 'Livewire', 'percentage' => 80],
        ['name' => 'Blade', 'percentage' => 85],
        ['name' => 'MariaDB', 'percentage' => 75],
        ['name' => 'Docker', 'percentage' => 80],
    ];

    $hardProjects = [
        [
            'title' => 'Website Portfolio Laravel',
            'status' => 'Published',
            'description' => 'Website portfolio berbasis Laravel, Blade, Livewire, dan Filament v3 untuk mengelola data admin.',
            'url' => route('projects.index'),
        ],
        [
            'title' => 'Sistem Manajemen Project',
            'status' => 'Published',
            'description' => 'Aplikasi CRUD data project dengan admin panel Filament v3 dan database MariaDB.',
            'url' => route('projects.index'),
        ],
        [
            'title' => 'Website Toko Game Online',
            'status' => 'Review',
            'description' => 'Konsep website penjualan item game online dengan fitur katalog, checkout, dan dashboard admin.',
            'url' => route('projects.index'),
        ],
    ];
@endphp

<x-layouts.app
    title="Muhamad Ilham Suparno | Home"
    :biodata="$biodata"
>

    <!-- HERO -->
    <section class="hero-section reveal-section">
        <div class="hero-container">
            <div class="hero-text">
                <span class="hero-label">Personal Portfolio</span>

                <h1 class="hero-title">
                    Muhamad Ilham Suparno
                </h1>

                <p class="hero-description">
                    Lahir di Jakarta pada 18 Februari 2005, adalah mahasiswa Fakultas Ilmu Komputer,Program Studi Sistem Informasi, 
                    di Universitas Esa Unggul Tangerang sebagai anak pertama dari 3 bersaudara, ia tertarik pada dunia Komputer 
                    bertujuan untuk meningkatkan pemanfaatan teknologi di masa depan nanti.
                </p>

                <div class="hero-contact">
                    <div class="contact-item glassmorphism">
                        <div>
                            <small>Email</small>
                            <strong>ilhamlima903@gmail.com</strong>
                        </div>
                    </div>

                    <div class="contact-item glassmorphism">
                        <div>
                            <small>No HP</small>
                            <strong>085813295317</strong>
                        </div>
                    </div>

                    <div class="contact-item glassmorphism">
                        <div>
                            <small>Alamat</small>
                            <strong>Tangerang, Indonesia</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <div class="image-wrapper">
                    <div class="image-glow"></div>

                    <img
                        src="{{ $profileImage }}"
                        alt="Avatar"
                        class="profile-image"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">About</span>
                <h2>Profil</h2>
            </div>

            <div class="about-card glassmorphism">
                <p>
                    Saya tertarik pada pengembangan aplikasi web modern, khususnya menggunakan Laravel sebagai backend,
                    Filament v3 sebagai admin panel, Livewire dan Blade untuk frontend interaktif, serta MariaDB sebagai database.
                    Saya juga menggunakan Docker untuk membuat environment development lebih rapi dan mudah dijalankan.
                </p>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="skills-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Skills</span>
                <h2>Keahlian</h2>
            </div>

            <div class="skills-grid">
                @foreach($hardSkills as $skill)
                    <div class="skill-card glassmorphism reveal-item">
                        <div class="skill-header">
                            <h3>{{ $skill['name'] }}</h3>

                            <span class="skill-percent">
                                {{ $skill['percentage'] }}%
                            </span>
                        </div>

                        <div class="skill-bar">
                            <div
                                class="skill-progress"
                                data-width="{{ $skill['percentage'] }}"
                            ></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROJECT -->
    <section class="projects-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Projects</span>
                <h2>Project Terbaru</h2>
            </div>

            <div class="skills-grid">
                @foreach($hardProjects as $project)
                    <div class="skill-card glassmorphism reveal-item">
                        <div>
                            <span class="project-badge">
                                {{ $project['status'] }}
                            </span>

                            <h3 style="margin:18px 0 10px">
                                {{ $project['title'] }}
                            </h3>

                            <p style="color:#a0aec0;line-height:1.7">
                                {{ $project['description'] }}
                            </p>
                        </div>

                        <div style="margin-top:24px">
                            <a
                                href="{{ $project['url'] }}"
                                class="btn-primary"
                            >
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="project-more">
                <a
                    href="{{ route('projects.index') }}"
                    class="btn-primary"
                >
                    Lihat Semua Project
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section
        class="contact-section reveal-section"
        id="contact"
    >
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Contact</span>
                <h2>Mari Terhubung</h2>
            </div>

            <div class="contact-wrapper">
                <div class="contact-info glassmorphism">
                    <div class="info-item">
                        <div>
                            <small>Email</small>
                            <strong>ilhamlima903@gmail.com</strong>
                        </div>
                    </div>

                    <div class="info-item">
                        <div>
                            <small>No HP</small>
                            <strong>085813295317</strong>
                        </div>
                    </div>

                    <div class="info-item">
                        <div>
                            <small>Instagram</small>
                            <strong>@igrenc.id</strong>
                        </div>
                    </div>

                    <div class="info-item">
                        <div>
                            <small>Alamat</small>
                            <strong>Tangerang, Indonesia</strong>
                        </div>
                    </div>
                </div>

                <form
                    method="POST"
                    action="{{ route('contact.send') }}"
                    class="contact-form glassmorphism"
                >
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="contact_name">Nama</label>

                        <input
                            id="contact_name"
                            type="text"
                            name="name"
                            placeholder="Nama Anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact_email">Email</label>

                        <input
                            id="contact_email"
                            type="email"
                            name="email"
                            placeholder="Email Anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact_message">Pesan</label>

                        <textarea
                            id="contact_message"
                            name="message"
                            placeholder="Tuliskan pesan Anda"
                            required
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn-primary"
                    >
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

</x-layouts.app>