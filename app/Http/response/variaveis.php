<?php

 // Create connection


	$cuida=DB::Table('mk_integrador')->where('id','=',1)->get();


	foreach ($cuida as $cuidas) {
		
		$sessao=$cuidas->num_sessao;
		$hr_central=$cuidas->NumHoraCentral;
	}



  if ($sessao== ''){
   $NumSessao = "97C507E943A8AB47A7E5BC18D5210245B0B73259762F5113CCEAE2F454A8D5478E62DE1E39DD502B";
 }
 if ($hr_central == '1'){
   $hr_central = '1901-01-01T00:00:00';
 }
 date_default_timezone_set('America/Sao_Paulo');
 $data = date("Y-m-d") . "T" . date("H:i:s");
 $Nrdata = date("Ymd");
 $SeuSistema = "ADM03306921201R";
 $NrLocal = "$Nrdata";
 $HoraLocal = "$data";
 $Sessao = "$sessao";
 $NrCentral = "0";
 $HoraCentral = "$hr_central";
 $CtlAP = "AP00";
 $VersaoTabela = "108";
 $VersaoInterface = "1";
 $Administradora = "041";
 $IdOrigem = "11111111111111";
 $OrigemServico = "66";
 $OpcaoOperador = "88";
 ?>