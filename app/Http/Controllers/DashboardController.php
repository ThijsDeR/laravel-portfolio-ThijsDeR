<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quartile;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function show() 
    {
        $maxEc = 0;
        $currentEc = 0;
        foreach(Quartile::all() as $quartile) {
            $maxEc += $quartile->max_ec_amount();
            $currentEc += $quartile->ec_amount();
        }

        if ($currentEc === 60) {
            $progressBarColor = 'lightgreen';
        }
        else if ($currentEc >= 45) {
            $progressBarColor = 'orange';
        }
        else {
            $progressBarColor = 'lightcoral';
        }

        return view('dashboard', [
            'title' => 'Dashboard',
            'quartiles' => Quartile::all(),
            'maxEc' => $maxEc,
            'currentEc' => $currentEc,
            'progressBarColor' => $progressBarColor

        ]);
    }
}


