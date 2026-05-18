@props(['projects', 'finalReport'])

<x-layouts.app title="Projects | Portfolio" :biodata="null">

    <style>
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .project-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 24px;
            min-height: 280px;
            padding: 28px;
            overflow: hidden;
        }

        .project-card > div {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .project-card h3 {
            margin: 0;
            line-height: 1.25;
            font-size: 26px;
            word-break: break-word;
        }

        .project-card p {
            margin: 0;
            line-height: 1.7;
            font-size: 16px;
            color: #cbd5e1;
        }

        .project-card .btn-primary {
            margin-top: auto;
            width: fit-content;
            position: relative;
            z-index: 2;
        }

        .featured-project {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
            padding: 28px;
            margin-bottom: 32px;
        }

        @media (max-width: 768px) {
            .featured-project {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>

    <section class="projects-page reveal-section">

        <div class="projects-hero glassmorphism">
            <div>
                <span class="section-label">Showcase</span>
                <h1>Daftar Project</h1>
                <p>
                    Semua project yang tersimpan di database akan muncul di halaman ini.
                    Project bisa dikelola langsung melalui panel admin Filament.
                </p>
            </div>

            <a href="{{ url('/') }}" class="btn-primary">
                Kembali Home
            </a>
        </div>

        @if($finalReport)
            <div class="featured-project glassmorphism reveal-item">
                <div>
                    <span class="project-badge">Final Report</span>
                    <h2>Laporan Awal Project Akhir</h2>
                    <p>{{ $finalReport->short_description }}</p>
                </div>

                <a class="btn-primary" href="{{ route('projects.show', $finalReport) }}">
                    Buka Laporan Akhir
                </a>
            </div>
        @endif

        <div class="project-grid">
            @forelse($projects as $project)
                <article class="project-card reveal-item">
                    <div>
                        <span class="project-badge">{{ $project->status }}</span>

                        <h3>{{ $project->title }}</h3>

                        <p>{{ $project->short_description }}</p>
                    </div>

                    <a class="btn-primary" href="{{ route('projects.show', $project) }}">
                        Detail Project
                    </a>
                </article>
            @empty
                <div class="empty-state reveal-item">
                    <h3>Belum ada project</h3>
                    <p>Silakan tambahkan data melalui panel admin Filament.</p>
                </div>
            @endforelse
        </div>

    </section>

</x-layouts.app>