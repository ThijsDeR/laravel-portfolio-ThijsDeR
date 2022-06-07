<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function quartile() {
        return $this->belongsTo(Quartile::class);
    }

    public function ecs() {
        return $this->hasMany(Ec::class);
    }

    public function span() {
        $total = 0;
        
        foreach($this->ecs as $ec) {
            $total += $ec->span();
        }
        
        return $total;
    }

    public function max_ec_amount() {
        $total = 0;
        foreach($this->ecs as $ec) {
            $total += $ec->ec;
        }

        return $total;
    }

    public function ec_amount() {
        $total = 0;
        foreach($this->ecs as $ec) {
            if ($ec->passed()) {
                $total += $ec->ec;
            }
        }

        return $total;
    }
}
