<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{
    public function index() {
        return view('faq.index', [
            'title' => 'FAQ',
            'faqs' => Faq::all()
        ]);
    }

    public function create() {
        return view('faq.create', [
            'title' => 'Create FAQ'
        ]);
    }

    public function show($faq_id) {
        return view('faq.show', [
            'title' => 'Faq ' . $faq_id,
            'faq' => Faq::find($faq_id)
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

    public function edit($faq_id) {
        return view('faq.edit', [
            'title' => 'Faq ' . $faq_id,
            'faq' => Faq::find($faq_id)
        ]);
    }

    public function update($faq_id) {
        $faq = Faq::find($faq_id);
        $faq->question = request('question');
        $faq->link = request('link');
        $faq->body = request('body');
        $faq->save();

        return redirect('./faq/' . $faq_id);
    }

    public function destroy($faq_id) {
        $faq = Faq::find($faq_id);
        $faq->delete();

        return redirect('./faq');
    }
}
