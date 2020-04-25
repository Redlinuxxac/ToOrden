<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(auth()->user()->school);
        $user = auth()->user();
        $user->school;
        $tipoUser = $user->userable_type;
        $student = Student::find(1);
        $student->classes();
        dd($student->classes());
        //dd($user->userable->teacher->classes());
        //dd($user->userable);
        return view('dashboard.home');
    }
}
