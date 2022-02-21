<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
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

    public function show(Faq $faq) {
        return view('faq.show', [
            'title' => 'Faq ' . $faq->id,
            'faq' => $faq
        ]);
    }

    public function store(Request $request) {
        Faq::create($this->validateFaq($request));

        return redirect('./faq');
    }

    public function edit(Faq $faq) {
        return view('faq.edit', [
            'title' => 'Faq ' . $faq->id,
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq) {
        $faq->update($this->validateFaq($request));

        return redirect('./faq/' . $faq->id);
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect('./faq');
    }

    public function validateFaq(Request $request) {
        return $request->validate([
            'question' => 'required',
            'body' => 'required'
        ]);
    }
}
