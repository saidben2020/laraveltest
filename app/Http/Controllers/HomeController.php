<?php

namespace App\Http\Controllers;

use App\Mail\testmail;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $students=Student::all();
        Mail::to('test@test.com')->send(new testmail());
        return view('home')->with(compact('students'));
    }
}
