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

    public function create() {
        return view('createfaq', [
            'title' => 'Create FAQ'
        ]);
    }

    public function store() {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->link = request('link');
        $faq->body = request('body');
        $faq->save();

        return redirect('./faq');
    }
}
