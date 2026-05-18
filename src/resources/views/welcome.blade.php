@props(['biodata', 'projects'])

@php
    $profileImage = $biodata?->photo
        ? asset('storage/' . $biodata->photo)
        : asset('profile-template/img/profile-default.jpg');
@endphp

<x-layouts.app :title="($biodata?->name ?? config('app.name')) . ' | Home'" :biodata="$biodata">

    <section class="hero-section reveal-section">
        <div class="hero-container">
            <div class="hero-text">
                <span class="hero-label">Personal Portfolio</span>

                <h1 class="hero-title">
                    {{ $biodata?->name ?? 'MUHAMAD ILHAM SUPARNO' }}
                </h1>

                <p class="hero-description">
                    {{ $biodata?->about ?? 'Full stack developer dengan pengalaman membuat aplikasi modern menggunakan Laravel, Tailwind, dan teknologi web terbaru.' }}
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

                    <img src="{{ $profileImage }}" alt="Profile" class="profile-image">
                </div>
            </div>
        </div>
    </section>

    <section class="about-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">About</span>
                <h2>Ringkasan</h2>
                <p>Informasi profil, keterampilan, dan pendidikan dapat diatur dari panel admin Filament.</p>
            </div>

            <div class="about-card glassmorphism">
                <p>
                    {{ $biodata?->about ?? 'Tidak ada deskripsi profil yang tersedia. Silakan tambahkan dari Filament admin untuk menampilkan ringkasan yang lebih informatif.' }}
                </p>
            </div>
        </div>
    </section>

    <section class="skills-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Skills</span>
                <h2>Kemampuan Terbaik</h2>
                <p>Daftar keterampilan diambil dari tabel skills di database.</p>
            </div>

            <div class="skills-grid">
                @forelse($biodata?->skills ?? [] as $skill)
                    <div class="skill-card glassmorphism reveal-item">
                        <div class="skill-header">
                            <h3>{{ $skill->name }}</h3>
                            <span class="skill-percent">{{ $skill->percentage }}%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-progress" data-width="{{ $skill->percentage }}"></div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">Belum ada skill. Tambahkan dari Filament admin.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="education-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Education</span>
                <h2>Riwayat Pendidikan</h2>
                <p>Timeline pendidikan yang terhubung dengan tabel educations.</p>
            </div>

            <div class="timeline">
                @forelse($biodata?->educations ?? [] as $education)
                    <article class="timeline-item reveal-item">
                        <div class="timeline-marker"></div>

                        <div class="timeline-content glassmorphism">
                            <h3>{{ $education->school }}</h3>
                            <p class="major">{{ $education->major ?? 'Jurusan belum diisi' }}</p>
                            <span class="timeline-date">
                                {{ $education->start_year }} - {{ $education->end_year ?? 'Sekarang' }}
                            </span>
                        </div>
                    </article>
                @empty
                    <div class="empty-state">Belum ada pendidikan. Tambahkan dari Filament admin.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="projects-section reveal-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Projects</span>
                <h2>Project Terbaru</h2>
                <p>Project terbaru yang terhubung dengan halaman project.</p>
            </div>

            <div class="skills-grid">
                @forelse($projects ?? [] as $project)
                    <div class="skill-card glassmorphism reveal-item">
                        <div>
                            <span class="project-badge">{{ $project->status }}</span>

                            <h3 style="margin:18px 0 10px">
                                {{ $project->title }}
                            </h3>

                            <p style="color:#a0aec0;line-height:1.7">
                                {{ $project->short_description }}
                            </p>
                        </div>

                        <div style="margin-top:24px">
                            <a href="{{ route('projects.show', $project) }}" class="btn-primary">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">Belum ada project.</div>
                @endforelse
            </div>

            <div class="project-more">
                <a href="{{ route('projects.index') }}" class="btn-primary">
                    Lihat Semua Project
                </a>
            </div>
        </div>
    </section>

    <section class="contact-section reveal-section" id="contact">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Contact</span>
                <h2>Mari Terhubung</h2>
                <p>Gunakan formulir di bawah untuk mengirim pesan.</p>
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

                <form method="POST" action="{{ route('contact.send') }}" class="contact-form glassmorphism">
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-error">
                            <div>
                                <strong>Terjadi kesalahan:</strong>
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="contact_name">Nama</label>
                        <input id="contact_name" type="text" name="name" value="{{ old('name') }}" placeholder="Nama Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input id="contact_email" type="email" name="email" value="{{ old('email') }}" placeholder="Email Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="contact_message">Pesan</label>
                        <textarea id="contact_message" name="message" placeholder="Tuliskan pesan Anda" required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

</x-layouts.app>