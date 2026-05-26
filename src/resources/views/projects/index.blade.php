@props(['projects', 'finalReport'])

<x-layouts.app title="Projects | Portfolio" :biodata="null">

    <style>
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
        }

        .project-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 24px;
            min-height: 320px;
            padding: 28px;
            overflow: hidden;

            background: rgba(15, 23, 42, .7);
            border: 1px solid rgba(148, 163, 184, .15);
            border-radius: 24px;
            backdrop-filter: blur(14px);

            transition: .3s ease;
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: rgba(34, 211, 238, .4);
            box-shadow: 0 10px 35px rgba(34, 211, 238, .08);
        }

        .project-thumbnail {
            width: 100%;
            height: 220px;
            border-radius: 18px;
            object-fit: cover;
            margin-bottom: 18px;

            border: 1px solid rgba(148, 163, 184, .2);
        }

        .project-card > div {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .project-card h3 {
            margin: 0;
            line-height: 1.25;
            font-size: 28px;
            color: #fff;
            word-break: break-word;
        }

        .project-card p {
            margin: 0;
            line-height: 1.8;
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
            gap: 32px;
            padding: 32px;
            margin-bottom: 36px;

            background: rgba(15, 23, 42, .7);
            border: 1px solid rgba(148, 163, 184, .15);
            border-radius: 24px;
            backdrop-filter: blur(14px);
        }

        .featured-project h2 {
            margin-top: 10px;
            margin-bottom: 12px;
            font-size: 36px;
            color: #fff;
        }

        .featured-project p {
            color: #cbd5e1;
            line-height: 1.8;
        }

        .project-search-form {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;

            margin-bottom: 32px;
            padding: 22px;

            background: rgba(15, 23, 42, .7);
            border: 1px solid rgba(148, 163, 184, .15);
            border-radius: 20px;
            backdrop-filter: blur(14px);
        }

        .project-search-form input,
        .project-search-form select {
            flex: 1;
            min-width: 220px;

            padding: 14px 16px;

            border-radius: 14px;
            border: 1px solid rgba(148, 163, 184, .2);

            background: rgba(2, 6, 23, .7);
            color: #fff;

            outline: none;
        }

        .project-search-form input::placeholder {
            color: #94a3b8;
        }

        .project-search-form button,
        .project-search-form a {
            text-decoration: none;
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
                    Project dapat dikelola langsung melalui panel admin Filament.
                </p>
            </div>

            <a href="{{ url('/') }}" class="btn-primary">
                Kembali Home
            </a>
        </div>

        <form
            method="GET"
            action="{{ route('projects.index') }}"
            class="project-search-form reveal-item"
        >
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari project..."
            >

            <select name="status">
                <option value="">Semua Status</option>

                <option
                    value="draft"
                    @selected(request('status') === 'draft')
                >
                    Draft
                </option>

                <option
                    value="published"
                    @selected(request('status') === 'published')
                >
                    Published
                </option>

                <option
                    value="review"
                    @selected(request('status') === 'review')
                >
                    Review
                </option>
            </select>

            <button type="submit" class="btn-primary">
                Cari
            </button>

            <a href="{{ route('projects.index') }}" class="btn-primary">
                Reset
            </a>
        </form>

        @if($finalReport)
            <div class="featured-project glassmorphism reveal-item">

                @if($finalReport->thumbnail)
                    <img
                        src="{{ asset('storage/' . $finalReport->thumbnail) }}"
                        alt="{{ $finalReport->title }}"
                        class="project-thumbnail"
                        style="max-width: 340px;"
                    >
                @endif

                <div>
                    <span class="project-badge">
                        Final Report
                    </span>

                    <h2>Laporan Awal Project Akhir</h2>

                    <p>
                        {{ $finalReport->short_description }}
                    </p>
                </div>

                <a
                    class="btn-primary"
                    href="{{ route('projects.show', $finalReport) }}"
                >
                    Buka Laporan Akhir
                </a>
            </div>
        @endif

        <div class="project-grid">

            @forelse($projects as $project)

                <article class="project-card reveal-item">

                    @if($project->thumbnail)
                        <img
                            src="{{ asset('storage/' . $project->thumbnail) }}"
                            alt="{{ $project->title }}"
                            class="project-thumbnail"
                        >
                    @endif

                    <div>

                        <span class="project-badge">
                            {{ ucfirst($project->status) }}
                        </span>

                        <h3>
                            {{ $project->title }}
                        </h3>

                        <p>
                            {{ $project->short_description }}
                        </p>

                    </div>

                    <a
                        class="btn-primary"
                        href="{{ route('projects.show', $project) }}"
                    >
                        Detail Project
                    </a>

                </article>

            @empty

                <div class="empty-state reveal-item">
                    <h3>Belum ada project</h3>

                    <p>
                        Silakan tambahkan data melalui panel admin Filament.
                    </p>
                </div>

            @endforelse

        </div>

    </section>

</x-layouts.app>