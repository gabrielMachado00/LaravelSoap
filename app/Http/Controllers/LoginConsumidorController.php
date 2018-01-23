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
$DataNasc=$response->ConsultaAdesoesResult->Lista->Produtos->DataNascimento;
$cartao=$response->ConsultaAdesoesResult->Lista->Produtos->Cartao;
 $ean=$response->ConsultaAdesoesResult->Lista->Produtos->EAN;
 





 $response1 = $this->soapWrapper->call('Cadastro.ConsultaCadastroPF',
  [


    new ConsultaCadastro('ADM03306921201R',$Nrdata,$data,$sessao, '0',$hr_central, 'AP00','041', '00000000','66','0', '88','ADESSITE',
 (float)Request::input('CPF'),$DataNasc,Request::input('Senha'), $cartao)





]);

$senha=Request::input('Senha');
$nome=$response1->ConsultaCadastroPFResult->NomeConsumidor;
$sexo=$response1->ConsultaCadastroPFResult->Sexo;
$cep=$response1->ConsultaCadastroPFResult->CEPConsumidor;
$uf=$response1->ConsultaCadastroPFResult->UFConsumidor;
$CidadeConsumidor=$response1->ConsultaCadastroPFResult->CidadeConsumidor;
$BairroConsumidor=$response1->ConsultaCadastroPFResult->BairroConsumidor;
$TipoLogradouroConsumidor=$response1->ConsultaCadastroPFResult->TipoLogradouroConsumidor;
$LogradouroConsumidor=$response1->ConsultaCadastroPFResult->LogradouroConsumidor;
$NrEnderConsumidor=$response1->ConsultaCadastroPFResult->NrEnderConsumidor;
$ComplEnderConsumidor=$response1->ConsultaCadastroPFResult->ComplEnderConsumidor;
$DDDCelular=$response1->ConsultaCadastroPFResult->DDDCelular;
$FoneCelular=$response1->ConsultaCadastroPFResult->FoneCelular;
$DDDFixo=$response1->ConsultaCadastroPFResult->DDDFixo;
$FoneFixo=$response1->ConsultaCadastroPFResult->FoneFixo;
$EmailConsumidor=$response1->ConsultaCadastroPFResult->EmailConsumidor;
$AceitaMaterialInformativo=$response1->ConsultaCadastroPFResult->AceitaMaterialInformativo;
$AceitaUsodosDados=$response1->ConsultaCadastroPFResult->AceitaUsodosDados;
$AceitaCorreio=$response1->ConsultaCadastroPFResult->AceitaCorreio;
$AceitaFone=$response1->ConsultaCadastroPFResult->AceitaFone;
$AceitaSMS=$response1->ConsultaCadastroPFResult->AceitaSMS;
$AceitaEmail=$response1->ConsultaCadastroPFResult->AceitaEmail;

var_dump($response);
var_dump($response1);




View::  ('MeusDados',compact('nome','Cartao','sexo','cpf','senha','cartao','DataNasc','cep','uf','CidadeConsumidor','BairroConsumidor','TipoLogradouroConsumidor','LogradouroConsumidor','NrEnderConsumidor','ComplEnderConsumidor','DDDCelular','FoneCelular','DDDFixo','FoneFixo','EmailConsumidor','AceitaMaterialInformativo','AceitaUsodosDados','AceitaCorreio','AceitaFone','AceitaSMS','AceitaEmail','ean'));


}
















  
  
}








