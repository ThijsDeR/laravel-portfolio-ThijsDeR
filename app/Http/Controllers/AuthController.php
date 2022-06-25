<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginView(Request $request) {
        $title = 'Login';
        $key = 'login.'.$request->ip();
        $seconds = RateLimiter::availableIn($key);
        $retries = RateLimiter::retriesLeft($key, 5);

        return view('auth.login', compact('title', 'seconds', 'retries'));
    }

    public function login(Request $request) {        
        validator($request->all(), [
            'username' => ['required'],
            'password' => ['required'],
            'remember' => ['nullable']
        ])->validate();

        if(auth()->attempt($request->only(['username', 'password']), $request->remember)) {
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
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:10'],
            'remember' => ['nullable']
        ])->validate();

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => false
        ]);


        $this->login($request);

        return redirect()->route('home');
    }

    public function forgotPasswordView() {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
    
        $token = Str::random(64);
    
          DB::table('password_resets')->insert(
              ['email' => $request->email, 'token' => $token, 'created_at' => now()]
          );
    
        //   Mail::send('auth.email', ['link' => route('password.reset', $token)], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Reset Password Notification');
        //   });
    
          return redirect()->route('password.reset', $token);
    }

    public function resetPasswordView($token) {
        return view('auth.reset-password', compact('token'));
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:10|confirmed',
            'password_confirmation' => 'required',
      
        ]);
      
        $updatePassword = DB::table('password_resets')
                            ->where(['email' => $request->email, 'token' => $request->token])
                            ->first();
      
        if(!$updatePassword)
            return back()->withInput()->with('error', 'Invalid token!');
      
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
      
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
      
          return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
