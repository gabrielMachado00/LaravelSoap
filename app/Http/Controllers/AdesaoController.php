<?php

namespace App\Http\Controllers;

use App\Http\request\Adesao;
use App\Http\response\GetAdesaoResponse;

use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as HttpRequest;


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

  
  public function Index(){


$produtos=DB::table('mk_produtos')->get();


foreach ($produtos as $produto) {
  

$descricao=$produto->DESCRICAO;



}


  return view('InserirAdesao',compact('produtos','descricao'));

  }




  public function AddAdesao(){

return view('InserirAdesao');
  }






  public function InserirAdesao(HttpRequest $request) {

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
      GetAdesaoResponse::class,
        ]);

  

  });




$Nrdata=date("Ymd");
$data=date("Y-m-d") . "T" . date("H:i:s");




 $response = $this->soapWrapper->call('Adesao.AdesaoPrd',
  [


 new Adesao('ADM03306921201R',(int)$Nrdata,$data,
$sessao, 0,$hr_central, 'AP00','041', '00000000','66',0, '88','ADESSITE',
(float)Request::input('CPF'),
Request::input('DataNasc'), Request::input('senha'), 
 (int)Request::input('Cartao'),(float)Request::input('produto'),'',Request::input('CodProf'),
  Request::input('UFProf')
,Request::input('NomeProf'))



]);



$produtos=DB::table('mk_produtos')->limit(1)->get();


    // Without classmap
   $adesao=   
 new Adesao('ADM03306921201R',$Nrdata,$data,


$sessao, '0',$hr_central, 'AP00','041', '00000000','66','0', '88','ADESSITE',
(float)Request::input('CPF'),
Request::input('DataNasc'), Request::input('senha'), 
 (int)Request::input('Cartao'),7891721017261,'',Request::input('CodProf'),
  Request::input('UFProf'),
Request::input('NomeProf')
);









$status=$response->AdesaoPrdResult->StatusServico;


if($status>19){

$texto=$response->AdesaoPrdResult->TextoInformativo;

    return View('InserirAdesao',compact('status','texto','produtos'));
}





$produtos=DB::table('mk_produtos')->get();


foreach ($produtos as $produto) {
  

$descricao=$produto->DESCRICAO;



}




  $cuida=DB::table('mk_integrador')->limit(1)->get();


$nrCentral=$response->AdesaoPrdResult->NrCentral;


var_dump($response);



$cpf=$adesao->CPFConsumidor;
$DataNasc=$adesao->DataNascConsumidor;
$senha=$adesao->ControlePSW;
$ean=$adesao->EAN;





var_dump($DataNasc);



return view('InserirConsumidor',compact('response','cpf','ean','DataNasc','senha','produtos','descricao','nrCentral'));



  
  }
}
