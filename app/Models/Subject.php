<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'credit_number'
    ];

    public function semesters() {
        return $this->belongsToMany(Semester::class, 'semester_subject');
    }
}
