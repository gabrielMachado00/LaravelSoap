<?php

namespace App\Http\request;

class Cadastro
{

     protected $SeuSistema ;
   protected $NrLocal ;
   protected $HoraLocal ;

   protected $Sessao ;
   protected $NrCentral ;
   protected $HoraCentral ;
  protected  $CtlAP ;
   protected $Administradora ;
protected $Terminal;



   protected $IdOrigem ;
   protected $OrigemServico ;
  protected  $OpcaoOperador ;
  





protected $Usuario;
protected $CPFConsumidor;
protected $DataNascConsumidor;
protected $NomeConsumidor;
protected $Sexo;
protected $CEPConsumidor;
protected $UFConsumidor;
protected $CidadeConsumidor;
protected $BairroConsumidor;
protected $TipoLogradouroConsumidor;
protected $LogradouroConsumidor;
protected  $NrEnderConsumidor;
protected $ComplEnderConsumidor;
protected $Celular_DD;
protected $Celular;
protected $TeleFixo;
protected $Email;
protected $MatInfo;
protected $UsoDados;
protected $Correio;
protected $AceitaFone;
protected $AceitaSMS;
protected $AceitaEmail;
protected $Senha;


  public function __construct($SeuSistema,$NrLocal,$HoraLocal,$Sessao,$NrCentral,$HoraCentral,$CtlAP,
    $Administradora,$Terminal,$OrigemServico,$IdOrigem,$OpcaoOperador,$Usuario,$CPFConsumidor,$DataNascConsumidor,$NomeConsumidor,$Sexo,$CEPConsumidor,$UFConsumidor,$CidadeConsumidor,$BairroConsumidor,$TipoLogradouroConsumidor,$LogradouroConsumidor,$NrEnderConsumidor,$ComplEnderConsumidor,$DDDCelular,$FoneCelular, $DDDFixo ,$FoneFixo,$EmailConsumidor,$AceitaMaterialInformativo,$AceitaUsodosDados,$AceitaCorreio,$AceitaFone,$AceitaSMS, $AceitaEmail,$ControlePSW)
  {    
    $this->SeuSistema  = $SeuSistema;
    $this->NrLocal = $NrLocal;
    $this->HoraLocal  = $HoraLocal;
    $this->Sessao= $Sessao;
    $this->NrCentral    = $NrCentral;
    $this->HoraCentral= $HoraCentral;
    $this->CtlAP= $CtlAP;
    $this->Administradora  = $Administradora;
        $this->Terminal  = $Terminal;

    $this->OrigemServico      = $OrigemServico;
        $this->IdOrigem= $IdOrigem;

    $this->OpcaoOperador   = $OpcaoOperador;

    $this->Usuario    = $Usuario;
    $this->CPFConsumidor = $CPFConsumidor;
    $this->DataNascConsumidor = $DataNascConsumidor;
    $this->NomeConsumidor  = $NomeConsumidor;
    $this->Sexo   = $Sexo;
    $this->CEPConsumidor       = $CEPConsumidor;
    $this->UFConsumidor= $UFConsumidor;
    $this->CidadeConsumidor   = $CidadeConsumidor;
    $this->BairroConsumidor   = $BairroConsumidor;
    $this->TipoLogradouroConsumidor   = $TipoLogradouroConsumidor;
    $this->LogradouroConsumidor = $LogradouroConsumidor;
    $this->NrEnderConsumidor  = $NrEnderConsumidor;
    $this->ComplEnderConsumidor   = $ComplEnderConsumidor;
    $this->DDDCelular=$DDDCelular;
    $this->FoneCelular=$FoneCelular;
        $this->DDDFixo   = $DDDFixo;

    $this->FoneFixo   = $FoneFixo;
    $this->EmailConsumidor=$EmailConsumidor;
    $this->AceitaMaterialInformativo  = $AceitaMaterialInformativo;  
  	$this->AceitaUsodosDados = $AceitaUsodosDados;
    $this->AceitaCorreio = $AceitaCorreio;
    $this->AceitaFone  = $AceitaFone;
    $this->AceitaSMS   = $AceitaSMS;
    $this->AceitaEmail= $AceitaEmail;
    $this->ControlePSW  = $ControlePSW;
  }
}
  




