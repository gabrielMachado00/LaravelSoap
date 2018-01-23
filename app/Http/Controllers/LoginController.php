<?php
namespace App\Http\Controllers;
use App\Http\request\ConsultaAdesao;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Request;
class LoginController extends Controller
{
    //
   
  public function __construct(SoapWrapper $soapWrapper)
  {
    $this->soapWrapper = $soapWrapper;
  }
  /**
   * Use the SoapWrapper
   */
  public function LoginAdd(){


return View('Login');
  }


}