<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $biodata = Biodata::with([
            'skills',
            'educations'
        ])->first();

        $projects = Project::latest()->get();

        return view('home', compact(
            'biodata',
            'projects'
        ));
    }
}