@props(['project'])

<style>
.project-detail-wrapper { padding: 60px 0; }
.project-detail-card {
    background: rgba(15, 23, 42, .9);
    border: 1px solid rgba(148, 163, 184, .25);
    border-radius: 24px;
    padding: 32px;
}
.project-detail-header { margin-bottom: 32px; }
.project-detail-header span { color: #22d3ee; font-weight: 700; }
.project-detail-header h2 { font-size: 42px; color: #fff; margin: 8px 0; }
.project-detail-header p { color: #cbd5e1; font-size: 18px; }
.project-meta { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 28px; }
.project-badge {
    padding: 7px 14px;
    border-radius: 999px;
    background: rgba(34, 211, 238, .15);
    color: #67e8f9;
    border: 1px solid rgba(34, 211, 238, .35);
    font-weight: 700;
}
.project-badge.success {
    background: rgba(16,185,129,.15);
    color: #6ee7b7;
    border-color: rgba(16,185,129,.35);
}
.project-section { margin-top: 28px; }
.project-section h3 { color: #fff; font-size: 24px; margin-bottom: 10px; }
.project-section p { color: #cbd5e1; line-height: 1.8; }
.stack-list { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 16px; }
.stack-list span {
    background: rgba(30,41,59,.9);
    color: #e2e8f0;
    border: 1px solid rgba(148,163,184,.25);
    padding: 8px 14px;
    border-radius: 999px;
}
.diagram-frame {
    background: rgba(2,6,23,.6);
    border: 1px solid rgba(148,163,184,.25);
    border-radius: 18px;
    padding: 20px;
    color: #cbd5e1;
}
.download-btn {
    display: inline-flex;
    background: #06b6d4;
    color: #020617;
    padding: 12px 18px;
    border-radius: 14px;
    font-weight: 800;
    text-decoration: none;
}
</style>

<x-layouts.app :title="'Project | ' . $project->title" :biodata="null">
    <section class="section reveal project-detail-wrapper">
        <div class="section-heading project-detail-header">
            <span>Project Detail</span>
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->short_description }}</p>
        </div>

        <div class="profile-card reveal project-detail-card">
            <div class="project-meta">
                <span class="project-badge">{{ ucfirst($project->status) }}</span>

                @if($project->is_final_report)
                    <span class="project-badge success">Laporan Akhir</span>
                @endif
            </div>

            <div class="project-section">
                <h3>Analisis Masalah & Kebutuhan Sistem</h3>
                <p>{{ $project->problem_analysis ?? 'Deskripsi masalah belum tersedia.' }}</p>
            </div>

            <div class="project-section">
                <h3>Arsitektur & Tech Stack</h3>
                <p>{{ $project->system_requirements ?? 'Rincian arsitektur belum tersedia.' }}</p>

                <div class="stack-list">
                    @foreach(explode(',', $project->tech_stack ?? '') as $stack)
                        @if(trim($stack))
                            <span>{{ trim($stack) }}</span>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="project-section">
                <h3>Diagram ERD / Flowchart</h3>
                <div class="diagram-frame reveal">
                    {!! $project->design_diagram ?? '<p>Diagram belum diunggah.</p>' !!}
                </div>
            </div>

            @if($project->report_pdf)
                <div class="project-section">
                    <h3>File Laporan</h3>
                    <a href="{{ asset('storage/' . $project->report_pdf) }}" target="_blank" class="download-btn">
                        Download Laporan PDF
                    </a>
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>