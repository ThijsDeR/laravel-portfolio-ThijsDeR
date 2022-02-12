<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{
    public function show() {
        return view('faq', [
            'title' => 'FAQ',
            'faqs' => Faq::all()
        ]);
    }
}
