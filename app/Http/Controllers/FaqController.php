<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{
    public function show() {
        return view('faq', [
            'title' => 'FAQ'
        ]);
    }
}
