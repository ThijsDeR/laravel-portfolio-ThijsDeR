<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addResult ($result) {
        if ($result > $this->best_grade) {
            if (($this->best_grade < $this->lowest_passing_grade) && $result >= $this->lowest_passing_grade) {
                $this->passed_at = now();
            }
            $this->best_grade = $result;
            $this->save();

            return 'Added New Result...';
        } else {
            return 'Previous Result was Better, ignored...';
        }

    }   
}
