<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'user_id',
        'salary',
        'academic_status',
        'certifications',
        'research_interests',
        'joining_date',
        'working_hours',
        'status',
    ];

    protected $casts = [
        'joining_date' => 'date',
        'salary' => 'decimal:2',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
