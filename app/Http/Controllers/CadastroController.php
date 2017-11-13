<?php

namespace App\Http\Controllers;

use App\Http\request\Cadastro;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Request;
class CadastroController
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

  public function Add(){

return View('Inserir');
  }


private $SeuSistema="ADM03306921201R";

  public function Inserir() {

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
$data=date("Y-m-d H:i:s");
$Nrdata=date("Ymd");



  
    $this->soapWrapper->add('PDVCadastroPFV1', function ($service) {
      $service
        ->wsdl('https://sc3.tc2b.net.br/contMSGWEB2/PDVCadastroPFV1.asmx?WSDL')
        ->trace(true)
         
    ->classmap([
        Cadastro::class,

        ]);
  });


 $response = $this->soapWrapper->call('PDVCadastroPFV1.CadastroPF',
  [


    new Cadastro('DM03306921201R',
 $Nrdata,
'2017-11-12T22:54:13',
$sessao,
 '1',
$hr_central,
 'AP00',
 '041',
 '1',
'66',
  '11111111111111',
  '88',
 '100000000',
 '1',
 '2017-11-12T22:54:13',
 'gbrl',
 Request::input('Sexo') ,
 Request::input('CEP'),
 Request::input('UF'),
 Request::input('Cidade'),
 Request::input('Bairro'),
 Request::input('TLogradouro'),
 Request::input('Logradouro'),
 Request::input('Numero'),
Request::input('ComplementoEnd'),
 '11',
 Request::input('Celular'),
 '11',
 '1999999999999',
 Request::input('Email'),
 Request::input('MatInfo'),  
 Request::input('UsoDados'),
 Request::input('Correio'),
 Request::input('AceitaTele'),
 Request::input('AceitaSMS'),
 Request::input('AceitaEmail'),

 '1')


]);


    // Without classmap
    

   var_dump($response);


  
  }
}
