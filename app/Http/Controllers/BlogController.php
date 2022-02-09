<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    public function show() {
        return view('blog', [
            'title' => 'Blog'
        ]);
    }
}
