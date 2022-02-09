<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function show() {
        return view('profile', [
            'title' => 'Profile'
        ]);
    }
}
