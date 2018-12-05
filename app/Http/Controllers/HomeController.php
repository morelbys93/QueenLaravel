<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }
=======
    // public function __construct()
    // {
    //      $this->middleware('auth', ['except' => ['index'] ]); //Vale para acceso con registro.
    // }
>>>>>>> c4a8b514a4f3c9e353cb52effcb323ebf47c80cc

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
}
