<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function show() {
        $result = Http::get('https://images-api.nasa.gov/search?q=moon&media_type=image');
        $item = $result->json()['collection']['items'][random_int(0, count($result->json()['collection']['items']) - 1)];
        $title = 'Api Challenges';
        return view('apichallenges', compact('item', 'title'));
    }
}
