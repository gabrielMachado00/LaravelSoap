<?php
namespace App\Http\Controllers;
use App\Http\request\Cadastro;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\RedirectResponse ;
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
  public function AddConsumidor(){
return View('InserirConsumidor');
  }
private $SeuSistema="ADM03306921201R";


  public function InserirConsumidor() {

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


$Nrdata=date('Ymd');

$data=date("Y-m-d") . "T" . date("H:i:s");

$cpf=Request::input('CPFCadastro');

  
    $this->soapWrapper->add('PDVCadastroPFV1', function ($service) {
      $service
        ->wsdl('https://security.tc2b.com.br/PDVCadastroPFV1.asmx?WSDL')
        ->trace(true)
      
    ->classmap([
        Cadastro::class,
        ]);
  });


 $response = $this->soapWrapper->call('PDVCadastroPFV1.CadastroPF',
  [
    new Cadastro('ADM03306921201R',$Nrdata,$data,


$sessao, 0
,$hr_central, 'AP00','041', '00000000','66',0, '88','ADESSITE',
(float)Request::input('CPFCadastro'),

 Request::input('DataNascCadastro'),
 Request::input('Consumidor'),

 Request::input('Sexo') ,
 Request::input('CEP'),
  Request::input('UF'),

 Request::input('Cidade'),
 Request::input('Bairro'),
 Request::input('TLogradouro'),
 Request::input('Logradouro'),
 Request::input('Numero'),
Request::input('ComplementoEnd'),
Request::input('Celular_DD'),
Request::input('Celular'),
Request::input('TeleFixo_DD'),
Request::input('Telefixo'),
 Request::input('Email'),
 Request::input('MatInfo'),  
 Request::input('UsoDados'),
  Request::input('Correio'),

  Request::input('AceitaTele'),
 Request::input('AceitaSMS'),
 Request::input('AceitaEmail'),
 Request::input('SenhaCadastro')


 
 )
]);

    var_dump($response);
  }
}