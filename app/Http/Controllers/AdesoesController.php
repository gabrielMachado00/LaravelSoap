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
    public function Adesoes(Request $request)
    {
$cpf=$request->session()->get('cpfSession');

var_dump($cpf);


        return view('adesoes');
    }
}
