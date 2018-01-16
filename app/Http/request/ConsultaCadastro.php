<?php

namespace App\Http\request;

class ConsultaCadastro    
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
protected $ControlePSW;
protected $Cartao;





  public function __construct($SeuSistema,$NrLocal,$HoraLocal,$Sessao,$NrCentral,$HoraCentral,$CtlAP,
    $Administradora,$Terminal,$OrigemServico,$IdOrigem,$OpcaoOperador,$Usuario,$CPFConsumidor,$DataNascConsumidor,$ControlePSW,$Cartao)
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

    $this->DataNascConsumidor= $DataNascConsumidor;

    $this->ControlePSW= $ControlePSW;

        $this->Cartao=$Cartao;
  }
}
  




