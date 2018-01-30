<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request as HttpRequest;


class AtualizaAdesaoController extends Controller
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
  public function AtualizaAdesao(HttpRequest $response ){

$cartao=$response->session()->get('cartao');
$nome=$response->session()->get('nome');
$cpf=$response->session()->get('cpf');
$Desconto=$response->session()->get('desconto');
$ean=$response->session()->get('ean');

$desconto=$Desconto/100;


return View('AtualizaAdesao',compact('cpf','nome','cartao','ean','desconto'));
  }
  
}
