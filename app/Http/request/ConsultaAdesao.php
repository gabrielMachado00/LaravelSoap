<?php

namespace App\Http\request;

class ConsultaAdesao
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
    protected $Cartao;
protected $CPFConsumidor;
protected $ControlePSW;
protected $EAN;
protected $NumeroReferencia;
protected $PaginaRequerida;





  public function __construct($SeuSistema,$NrLocal,$HoraLocal,$Sessao,$NrCentral,$HoraCentral,$CtlAP,
    $Administradora,$Terminal,$OrigemServico,$IdOrigem,$OpcaoOperador,$Usuario,$Cartao,$CPFConsumidor,$ControlePSW,$EAN,$NumeroReferencia,$PaginaRequerida)
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
    $this->Cartao=$Cartao;
    $this->CPFConsumidor = $CPFConsumidor;

    $this->ControlePSW  = $ControlePSW;
        $this->EAN   = $EAN;
    $this->NumeroReferencia= $NumeroReferencia;

    $this->PaginaRequerida= $PaginaRequerida;
  }
}
  




