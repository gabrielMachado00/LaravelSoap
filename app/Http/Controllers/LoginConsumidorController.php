<?php

namespace App\Http\Controllers;

use App\Http\request\ConsultaAdesao;
use App\Http\request\ConsultaCadastro;


use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Request;



class LoginConsumidorController extends Controller
{
    //

   
  public function __construct(SoapWrapper $soapWrapper)
  {
    $this->soapWrapper = $soapWrapper;
  }

  public function LoginConsumidor(){

return View('LoginConsumidor');
  }




  public function Login(Request $request) {

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
        ->wsdl('https://security.tc2b.com.br/PDVConsultaAdesoesV1.asmx?WSDL')
        ->trace(true)
         
    ->classmap([
        ConsultaAdesao::class,

        ]);
  });



  $this->soapWrapper->add('Cadastro', function ($service) {
      $service
        ->wsdl('https://security.tc2b.com.br/PDVConsultaCadastroPFV1.asmx?WSDL')
        ->trace(true)
         
    ->classmap([
        ConsultaCadastro::class,

        ]);
  });




$Nrdata=date("Ymd");
$data=date("Y-m-d") . "T" . date("H:i:s");



 $response = $this->soapWrapper->call('Adesao.ConsultaAdesoes',
  [


    new ConsultaAdesao('ADM03306921201R',$Nrdata,$data,$sessao, '0',$hr_central, 'AP00','041', '00000000','66','0', '88','ADESSITE','0',
 (float)Request::input('CPF'),Request::input('Senha'),'0', '0','0')





]);


$cpf=$response->ConsultaAdesoesResult->CPFConsumidor;
$DataNascimento=$response->ConsultaAdesoesResult->Lista->Produtos->DataNascimento;

$cartao=$response->ConsultaAdesoesResult->Lista->Produtos->Cartao;
 

 $response1 = $this->soapWrapper->call('Cadastro.ConsultaCadastroPF',
  [


    new ConsultaCadastro('ADM03306921201R',$Nrdata,$data,$sessao, '0',$hr_central, 'AP00','041', '00000000','66','0', '88','ADESSITE',
 (float)Request::input('CPF'),$DataNascimento,Request::input('Senha'), $cartao)





]);





var_dump($response1);
var_dump($response);


return view('AtualizaAdesao');
}
















  
  
}








