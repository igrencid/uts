<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'short_description',
        'problem_analysis',
        'system_requirements',
        'tech_stack',
        'design_diagram',
        'report_pdf',
        'is_final_report',
        'status',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
