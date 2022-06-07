<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function exams() {
        return $this->hasMany(Exam::class);
    }

    public function span() {
        return count($this->exams);
    }

    public function passed() {
        $failed = true;
        foreach($this->exams as $exam) {
            if ($exam->grade < 5.5) $failed = false;
        }

        return $failed;
    }
}
