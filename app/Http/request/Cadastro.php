<?php

namespace App\Http\Request;

class GetCadastro
{
  
   * @var string
   */
  protected $SeuSistema;


  protected $NrLocal;

protected $HoraLocal;

protected $Sessao;

protected $Nr_Central;

protected $HoraCentral;

protected $Administradora;

protected $Terminal;

protected $OrigemServico;

protected $IdOrigem;

protected $OpcaoOperador;

protected $Usuario;
protected $CPF;
protected $DataNasc;
protected $Consumidor;
protected $Sexo;
protected $CEP;
protected $UF;
protected $Cidade;
protected $Bairro;
protected $TLogradouro;
protected $Logradouro;
protected  $Numero;
protected $ComplementoEnd;
protected $Celular_DD;
protected $Celular;
protected $TeleFixo;
protected $Email;
protected $MatInfo;
protected $UsoDados;
protected $Correio;
protected $AceitaTele;
protected $AceitaSMS;
protected $AceitaEmail;
protected $Senha;


 

  /**
   * GetConversionAmount constructor.
   *
   * @param string $CurrencyFrom
   * @param string $CurrencyTo
   * @param string $RateDate
   * @param string $Amount
   */
  public function __construct($SeuSistema, $NrLocal,$HoraLocal,
 $Sessao,$Nr_Central,$HoraCentral, $Administradora, $Terminal,$OrigemServico, $IdOrigem, $OpcaoOperador, $Usuario,
 $CPF, $DataNas,$Consumidor, $Sexo,$CEP,$UF, $Cidade, $Bairro,$TLogradouro, $Logradouro,$Numero,$ComplementoEnd,$Celular_DD,$Celular, $TeleFixo,$Email,$MatInfo,$UsoDados,$Correio,$AceitaTele,$AceitaSMS, $AceitaEmail,$Senha,
)
  {    

    $this->NrLocal = $NrLocal;
    $this->HoraLocal  = $HoraLocal;
    $this->Sessao   = $Sessao;
    $this->Nr_Central    = $Nr_Central;
    $this->HoraCentral= $HoraCentral;
    $this->Administradora  = $Administradora;
    $this->Terminal= $Terminal;
    $this->OrigemServico      = $OrigemServico;
    $this->IdOrigem= $IdOrigem;
    $this->OpcaoOperador   = $OpcaoOperador;
    $this->Usuario    = $Usuario;
    $this->CPF      = $CPF;
    $this->DataNas = $DataNas;
    $this->Consumidor   = $Consumidor;
    $this->Sexo   = $RateDate;
    $this->CEP       = $CEP;
    $this->UF= $UF;
    $this->Cidade   = $Cidade;
    $this->Bairro   = $Bairro;
    $this->TLogradouro    = $TLogradouro;
    $this->Logradouro = $Logradouro;
    $this->Numero   = $Numero;
    $this->ComplementoEnd   = $ComplementoEnd;
    $this->Celular_DD      = $Celular_DD;
    $this->Celular= $Celular;
    $this->TeleFixo   = $TeleFixo;
    $this->Email=$Email;
    $this->MatInfo  = $MatInfo;  
  	$this->UsoDados = $UsoDados;
    $this->Correio = $Correio;
    $this->AceitaTele  = $AceitaTele;
    $this->AceitaSMS   = $AceitaSMS;
    $this->AceitaEmail= $AceitaEmail;
    $this->Senha  = $Senha;
  }

  /**
   * @return string
   */
  public function getCurrencyFrom()
  {
    return $this->CurrencyFrom;
  }


}




