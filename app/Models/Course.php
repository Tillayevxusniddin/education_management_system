<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'start_date',
        'end_date',
        'semester_count',
        'is_active',
    ];

    protected $dates = ['start_date', 'end_date'];

    public static function getActiveAcademicYear()
    {
        return self::where('is_active', true)->first();
    }

    public function isExpired()
    {
        return $this->end_date < now();
    }


}
