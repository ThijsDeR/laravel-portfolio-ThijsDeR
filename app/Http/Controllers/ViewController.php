<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ViewController extends BaseController
{
    public function show($title = 'home') {
        return view(strtolower($title), [
            'title' => ucwords($title)
        ]);
    }
}
