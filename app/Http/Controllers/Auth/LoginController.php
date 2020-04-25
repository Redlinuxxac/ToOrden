<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }/*
    public function __construct()
    {
        $this->middleware('guest', ['only', 'ShowLoginForm']);
    }
    public function ShowLoginForm()
    { 
        return view('auth.login');
    }*/
    public function login(Request $request)
    {
        $credentials = $request->only('school_id','email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // Authentication passed...
            return redirect()->route('home');
        }
        //dd(old('email'));
        ///dd($request->email);
        return redirect('/')->withInput()->withErrors(['email' => trans('auth.failed')]);
    }
   
}
