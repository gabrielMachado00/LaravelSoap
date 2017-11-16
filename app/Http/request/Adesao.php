<?php

namespace App\Http\request;

class Adesao
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
protected $OrigemServico ;
protected $IdOrigem ;

protected  $OpcaoOperador ;
protected $Usuario;
public $CPFConsumidor;
public $DataNascConsumidor;

public $ControlePSW;
protected $Cartao;
protected $EAN; 
protected $Campanha;
protected $CodigoProfissional;
protected $UFProfissional;
protected $NomeProfissional;
protected $Lista;



  public function __construct($SeuSistema,$NrLocal,$HoraLocal,$Sessao,$NrCentral,$HoraCentral,$CtlAP,
    $Administradora,$Terminal,$OrigemServico,$IdOrigem,$OpcaoOperador,$Usuario,$CPFConsumidor,$DataNascConsumidor,$ControlePSW,$Cartao,$EAN,$Campanha,$CodigoProfissional,$UFProfissional,$NomeProfissional,$Lista)
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
        $this->ControlePSW   = $ControlePSW;
    $this->Cartao= $Cartao;
    $this->EAN = $EAN;
        $this->Campanha    = $Campanha;
    $this->UFProfissional = $UFProfissional;
    $this->NomeProfissional= $NomeProfissional;
       $this->Lista= $Lista;

  }
}
  




