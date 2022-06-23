<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginView() {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }

    public function login(Request $request) {
        validator($request->all(), [
            'username' => ['required'],
            'password' => ['required'],
        ])->validate();

        if(auth()->attempt($request->only(['username', 'password']))) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['all' => 'Could not find matching Credentials']);
    }

    public function logout() {
        auth()->logout();

        return redirect()->route('home');
    }

    public function registerView() {
        $title = 'Register';
        return view('auth.register', compact('title'));
    }

    public function register(Request $request) {
        validator($request->all(), [
            'username' => ['required', 'max:32', 'unique:users'],
            'password' => ['required', 'min:8'],
        ])->validate();

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'admin' => false
        ]);


        $this->login($request);

        return redirect()->route('home');
    }
}
