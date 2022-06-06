<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
        $title = auth()->user()->username;
        return view('userpage', compact('title'));
    }
}
