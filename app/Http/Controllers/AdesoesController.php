<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdesoesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Adesoes()
    {

        return view('adesoes');
    }
}
