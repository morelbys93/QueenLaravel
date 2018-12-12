<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //      $this->middleware('auth', ['except' => ['index'] ]); //Vale para acceso con registro.
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $destacados = Product::where('promoted','=',1)->get();
      return view('welcome', compact('destacados'));
    }
}
