<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request as HttpRequest;



class MeusDadosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Dados( HttpRequest $request)
    {
        

$cartao=$request->session()->get('cartao');
$nome=$request->session()->get('nome');        
$cpf=$request->session()->get('cpf');
$Desconto=$request->session()->get('Desconto');
$ean=$request->session()->get('ean');


$nome=$request->session()->get('nome');
$senha=$request->session()->get('senha');
$cep=$request->session()->get('cep');
$uf=$request->session()->get('uf');
$bairro=$request->session()->get('bairro');
$TipoLogradouro=$request->session()->get('TipoLogradouro');
$uf=$request->session()->get('uf');
$TipoLogradouroConsumidor=$request->session()->get('TipoLogradouro');
$LogradouroConsumidor=$request->session()->get('Logradouro');
$NrEnderConsumidor=$request->session()->get('NrEndereco');
$CidadeConsumidor=$request->session()->get('Cidade');
$BairroConsumidor=$request->session()->get('Bairro');
$ComplEnderConsumidor=$request->session()->get('ComplementoEndereco');
$DDDFixo=$request->session()->get('DDDFixo');
$FoneFixo=$request->session()->get('FoneFixo');
$DDDCelular=$request->session()->get('DDDCelular');
$FoneCelular=$request->session()->get('FoneCelular');
$EmailConsumidor=$request->session()->get('EmailConsumidor');
$AceitaMaterialInformativo=$request->session()->get('AceitaMaterial');
$AceitaUsodosDados=$request->session()->get('AceitaUsodosDados');
$AceitaCorreio=$request->session()->get('AceitaCorreio');
$AceitaUsodosDados=$request->session()->get('AceitaUsodosDados');
$DataNasc=$request->session()->get('DataNasc');
$AceitaFone=$request->session()->get('AceitaFone');
$AceitaSMS=$request->session()->get('AceitaSMS');
$AceitaEmail=$request->session()->get('AceitaEmail');

     
return view ('MeusDados',compact('nome','Cartao','sexo','cpf','senha','cartao','DataNasc','cep','uf','CidadeConsumidor','BairroConsumidor','TipoLogradouroConsumidor','LogradouroConsumidor','NrEnderConsumidor','ComplEnderConsumidor','DDDCelular','FoneCelular','DDDFixo','FoneFixo','EmailConsumidor','AceitaMaterialInformativo','AceitaUsodosDados','AceitaCorreio','AceitaFone','AceitaSMS','AceitaEmail','ean'));
    }
}
