<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\Controller;
use Request; // use Illuminate\Http\Request; bunun yerine kullanılmış komut

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
        $okul = Student::all(); //paginate(10);  //Database veri alma kısmı
      return view('home', compact('okul'));
    }
}
