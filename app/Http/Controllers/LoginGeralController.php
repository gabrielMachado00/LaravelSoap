<?php

namespace App\Http\Controllers;

use App\Http\request\ConsultaAdesao;
use App\Http\request\ConsultaCadastro;
use App\Http\Controllers\View;

use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Request;
use Illuminate\Http\Request as req;


class LoginGeralController extends Controller
{
    //

   
  public function __construct(SoapWrapper $soapWrapper)
  {
    $this->soapWrapper = $soapWrapper;
  }

  public function LoginGeral(){

return View('LoginGeral');
  }





  
  
}








