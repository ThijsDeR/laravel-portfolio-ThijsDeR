<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function show() {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }
}


