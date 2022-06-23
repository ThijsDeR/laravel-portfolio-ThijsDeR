<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin', ['only' => [
            'create',
            'store',
            'edit',
            'update',
            'destroy'
        ]]);   
    }
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

        return redirect()->route('faq.index');
    }

    public function edit(Faq $faq) {
        return view('faq.edit', [
            'title' => 'Faq ' . $faq->id,
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq) {
        $faq->update($this->validateFaq($request));

        return redirect()->route('faq.show', $faq->id);
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect()->route('faq.index');
    }

    public function validateFaq(Request $request) {
        return $request->validate([
            'question' => 'required',
            'link' => 'nullable',
            'body' => 'required'
        ]);
    }
}
