<?php

namespace App\Http\Controllers;

use App\Http\request\Cadastro;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\DB;


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

Cadastro cadastro=new Cadastro();

  public function Inserir() 
  {
    $this->soapWrapper->add('Currency', function ($service) {
      $service
        ->wsdl('https://sc3.tc2b.net.br/contMSGWEB2/PDVCadastroPFV1.asmx')
        ->trace(true)
           ->classmap([
    Cadastro::class,
          
        ]);

    });

    // Without classmap
    






    var_dump($response);

    // With classmap
    $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
      new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
    ]);

    var_dump($response);
    exit;
  }
}