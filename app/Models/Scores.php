<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
// 1. nama tablenya apa
    protected $table = 'scores';

    // 2. field apa saja yang bisa diisi
    protected $fillable = [
        'student_id',
        'course_id',
        'score'
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
