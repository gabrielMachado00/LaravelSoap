<?php

namespace App\Http\Controllers;

use App\Http\request\Adesao;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Request;

use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\RedirectResponse ;

class AdesaoController
{

  /**
   * @var SoapWrapper
   */
  protected $soapWrapper;

  /**
   * SoapController constructor.
   *
   * @param SoapWrapper $soapWrapper
   */
  public function __construct(SoapWrapper $soapWrapper)
  {
    $this->soapWrapper = $soapWrapper;
  }

  /**
   * Use the SoapWrapper
   */

  public function AddAdesao(){

return View('InserirAdesao');
  }






  public function InserirAdesao() {

  $cuida=DB::table('mk_integrador')->limit(1)->get();

foreach ($cuida as $cuidas) {
  
  $sessao= $cuidas->SESSAO;
  $hr_central=$cuidas->HORA_CENTRAL;
if ($sessao == ''){
   $sessao = "97C507E943A8AB47A7E5BC18D5210245B0B73259762F5113CCEAE2F454A8D5478E62DE1E39DD502B";
 }

 if ($hr_central == ''){
   $hr_central = '1901-01-01T00:00:00';
 }

}




  
    $this->soapWrapper->add('Adesao', function ($service) {
      $service
        ->wsdl('https://sc3.tc2b.net.br/MSGWEB2/PDVAdesaoPrdV1.asmx?WSDL')
        ->trace(true)
         
    ->classmap([
        Adesao::class,

        ]);
  });




$Nrdata=date("Ymd");
$data=date("Y-m-d") . "T" . date("H:i:s");


 $response = $this->soapWrapper->call('Adesao.AdesaoPrd',
  [


    new Adesao('DM03306921201R',$Nrdata,$data,


$sessao, '0',Request::input('datanasc'), 'AP00','041', '00000000','66','0', '88','ADESSITE',
 Request::input('CPF') , '2017-11-12T22:54:13', Request::input('Senha'), 
 Request::input('Cartao'), '','', Request::input('CodProf'),
  Request::input('UFProf'),
 Request::input('NomeProf'),'')

]);
    // Without classmap
   $adesao= new Adesao('DM03306921201R',$Nrdata,$data,
$sessao, '0',$hr_central, 'AP00','041', '00000000','66','0', '88','ADESSITE',

 Request::input('CPF') , Request::input('datanasc'), Request::input('Senha'), 


 Request::input('Cartao'), '','', Request::input('CodProf'),


  Request::input('UFProf'),

 Request::input('NomeProf'),'');


$cpf=$adesao->CPFConsumidor;
$DataNasc=$adesao->DataNascConsumidor;
$senha=$adesao->ControlePSW;

 
return View('InserirConsumidor',compact('cpf', 'DataNasc', 'senha','response'));


  
  }
}
