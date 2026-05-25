@props(['biodata', 'projects'])

@php
    $profileImage = $biodata?->photo
        ? asset('storage/' . $biodata->photo)
        : asset('profile-template/img/profile-default.jpg');
@endphp

<x-layouts.app
    :title="($biodata?->name ?? config('app.name')) . ' | Home'"
    :biodata="$biodata"
>

    <!-- HERO -->
    <section class="hero-section reveal-section">
        <div class="hero-container">
            <div class="hero-text">
                <span class="hero-label">Personal Portfolio</span>

                <h1 class="hero-title">
                    {{ $biodata?->name ?? 'Portfolio' }}
                </h1>

                <p class="hero-description">
                    {{ $biodata?->about ?? 'Hi, saya seorang developer yang fokus membuat aplikasi modern menggunakan teknologi Laravel dan Livewire.' }}
                </p>

                <div class="hero-contact">
                    <div class="contact-item glassmorphism">
                        <div>
                            <small>Email</small>
                            <strong>{{ $biodata?->email ?? '-' }}</strong>
                        </div>
                    </div>

                    <div class="contact-item glassmorphism">
                        <div>
                            <small>No HP</small>
                            <strong>{{ $biodata?->phone ?? '-' }}</strong>
                        </div>
                    </div>

                    <div class="contact-item glassmorphism">
                        <div>
                            <small>Alamat</small>
                            <strong>{{ $biodata?->address ?? '-' }}</strong>
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
                <p>{{ $biodata?->about ?? '-' }}</p>
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
                @forelse($biodata?->skills ?? [] as $skill)
                    <div class="skill-card glassmorphism reveal-item">
                        <div class="skill-header">
                            <h3>{{ $skill->name }}</h3>

                            <span class="skill-percent">
                                {{ $skill->percentage }}%
                            </span>
                        </div>

                        <div class="skill-bar">
                            <div
                                class="skill-progress"
                                data-width="{{ $skill->percentage }}"
                            ></div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        Belum ada skill.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- EDUCATION -->
    <section class="education-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Education</span>
                <h2>Pendidikan</h2>
            </div>

            <div class="skills-grid">
                @forelse($biodata?->educations ?? [] as $education)
                    <div class="skill-card glassmorphism reveal-item">
                        <div>
                            <span class="project-badge">
                                {{ $education->start_year }} - {{ $education->end_year ?? 'Sekarang' }}
                            </span>

                            <h3 style="margin:18px 0 10px">
                                {{ $education->school }}
                            </h3>

                            <p style="color:#a0aec0;line-height:1.7">
                                {{ $education->major ?? 'Jurusan belum diisi' }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        Belum ada data pendidikan.
                    </div>
                @endforelse
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
                @forelse($projects as $project)
                    <div class="skill-card glassmorphism reveal-item">
                        <div>
                            <span class="project-badge">
                                {{ $project->status }}
                            </span>

                            <h3 style="margin:18px 0 10px">
                                {{ $project->title }}
                            </h3>

                            <p style="color:#a0aec0;line-height:1.7">
                                {{ $project->short_description }}
                            </p>
                        </div>

                        <div style="margin-top:24px">
                            <a
                                href="{{ route('projects.show', $project) }}"
                                class="btn-primary"
                            >
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        Belum ada project.
                    </div>
                @endforelse
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
                            <strong>{{ $biodata?->email ?? '-' }}</strong>
                        </div>
                    </div>

                    <div class="info-item">
                        <div>
                            <small>No HP</small>
                            <strong>{{ $biodata?->phone ?? '-' }}</strong>
                        </div>
                    </div>

                    <div class="info-item">
                        <div>
                            <small>Alamat</small>
                            <strong>{{ $biodata?->address ?? '-' }}</strong>
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