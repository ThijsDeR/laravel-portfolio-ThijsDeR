<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FakeAttackController extends Controller
{
    public function attacked($id) {
        $datas = DB::select(DB::raw('SELECT * FROM faqs WHERE id = ' . $id . ';')); 
        $datas = json_decode(json_encode($datas), true);
        $title = 'Fake Attack';
        return view('fakeattack', compact('datas', 'title'));
    }
}
