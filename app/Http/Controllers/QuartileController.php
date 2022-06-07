<?php

namespace App\Http\Controllers;

use App\Models\Quartile;
use Illuminate\Http\Request;

class QuartileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'create',
            'store',
            'edit',
            'update',
            'destroy'
        ]]);   
    }
    public function index() {
        return view('quartiles.index', [
            'title' => 'Quartiles',
            'quartiles' => Quartile::all()
        ]);
    }

    public function create() {
        return view('quartiles.create', [
            'title' => 'Create Quartile'
        ]);
    }

    public function show(Quartile $quartile) {
        return view('quartiles.show', [
            'title' => 'Quartile ' . $quartile->id,
            'quartile' => $quartile
        ]);
    }

    public function store(Request $request) {
        Quartile::create($this->validateQuartile($request));

        return redirect()->route('quartiles.index');
    }

    public function edit(Quartile $quartile) {
        return view('quartiles.edit', [
            'title' => 'Quartile ' . $quartile->id,
            'quartile' => $quartile
        ]);
    }

    public function update(Request $request, quartile $quartile) {
        $quartile->update($this->validateQuartile($request));

        return redirect()->route('quartiles.show', [$quartile->id]);
    }

    public function destroy(quartile $quartile) {
        $quartile->delete();

        return redirect()->route('quartiles.index');
    }

    public function validateQuartile(Request $request) {
        return $request->validate([
            'quartile' => 'required'
        ]);
    }
}
