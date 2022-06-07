<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function span() {
        $total = 0;
        foreach($this->courses as $course) {
            $total += $course->span();
        }

        return $total;
    }

    public function ec_amount() {
        $total = 0;
        foreach($this->courses as $course) {
            $total += $course->ec_amount();
        }

        return $total;
    }

    public function max_ec_amount() {
        $total = 0;
        foreach($this->courses as $course) {
            $total += $course->max_ec_amount();
        }

        return $total;
    }
}
