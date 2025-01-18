<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'date_of_birth',
        'unique_id',
        'address',
        'gender',
        'status',
        'user_id',
        'course_id',
        'group_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function groups() {
        return $this->belongsToMany(Group::class, 'student_group');
    }

    public function setStatus($status) {
        $this->status = $status;
        $this->save();
    }

    public function getFullName() {
        return $this->user->first_name . ' ' . $this->user->last_name;
    }
}
