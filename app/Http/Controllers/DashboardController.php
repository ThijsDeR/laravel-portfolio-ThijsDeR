<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Grade;

class DashboardController extends BaseController
{
    public function show() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'grades' => Grade::all()
        ]);
    }
}


