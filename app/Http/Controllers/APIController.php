<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function show() {
        $title = 'Api Challenges';
        return view('apichallenges', compact('title'));
    }
}
