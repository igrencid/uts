<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'name',
        'percentage',
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}