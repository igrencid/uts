<?php

use App\Models\Biodata;
use App\Models\ContactMessage;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $biodata = null;
    $projects = collect();

    if (Schema::hasTable('biodata')) {
        $biodata = Biodata::with([
            'skills',
            'educations'
        ])->first();
    }

    if (!$biodata) {
        $biodata = new Biodata([
            'name' => config('app.name'),
            'email' => '',
            'phone' => '',
            'about' => '',
            'address' => '',
        ]);
        $biodata->setRelation('skills', collect());
        $biodata->setRelation('educations', collect());
    }

    if (Schema::hasTable('projects')) {
        $projects = Project::orderByDesc('is_final_report')
            ->orderByDesc('updated_at')
            ->get();
    }

    return view('home', compact('biodata', 'projects'));
});

Route::get('/projects', function () {
    $projects = collect();
    $finalReport = null;

    if (Schema::hasTable('projects')) {
        $projects = Project::orderByDesc('is_final_report')
            ->orderByDesc('updated_at')
            ->get();
        $finalReport = $projects->firstWhere('is_final_report', true);
    }

    return view('projects.index', compact('projects', 'finalReport'));
})->name('projects.index');

Route::get('/projects/{project:slug}', function (Project $project) {
    return view('projects.show', compact('project'));
})->name('projects.show');

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    if (Schema::hasTable('contact_messages')) {
        ContactMessage::create($validated);
    }

    return back()->with('success', 'Pesan Anda telah dikirimkan.');
})->name('contact.send');
