<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image_url', 'category', 'access'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function totalLessonsCount(): int
    {
        return $this->lessons()->count();
    }

    public function completedLessonsCount($userId): int
    {
        return $this->lessons()
            ->whereHas('completedByUsers', fn($q) => $q->where('user_id', $userId))
            ->count();
    }

    public function progressPercentage($userId): int
    {
        $total = $this->totalLessonsCount();
        if ($total === 0) return 0;
        return (int) round(($this->completedLessonsCount($userId) / $total) * 100);
    }
}