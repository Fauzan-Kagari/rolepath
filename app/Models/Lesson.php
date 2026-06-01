<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'section_title', 'title', 'content', 'codepen_url', 'order_number'];

    // Relasi: 1 Lesson adalah milik 1 Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}