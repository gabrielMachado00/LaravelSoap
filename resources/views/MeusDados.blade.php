
<head>
    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

 <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/MeusDados.css')}}" rel="stylesheet">
    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulario_cep() {
                // Limpa valores do formul⳩o de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
               
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variⷥl "cep" somente com dtos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Express䯠regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
						$("#tipologradouro").val("...");
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
               

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                              	var divideLogradouro = dados.logradouro.split(" ");
																var removeLogradouro = divideLogradouro[0];
																arrayLogradouro= jQuery.grep(divideLogradouro, function(logradouro) {
																	return logradouro != removeLogradouro;
																});
																// var tadam = teste.splice(0,0);
																var logradouroCompleto = arrayLogradouro.join(" ");
																$("#tipologradouro").val(divideLogradouro[0]);
																$("#rua").val(logradouroCompleto);
																$("#bairro").val(dados.bairro);
																$("#cidade").val(dados.localidade);
																$("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado n䯠foi encontrado.
                                limpa_formulario_cep();
                                alert("CEP n䯠encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep 顩nv⭩do.
                        limpa_formulario_cep();
                        alert("Formato de CEP inv⭩do.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formul⳩o.
                    limpa_formulario_cep();
                }
            });
        });

    </script>
    </head>

    <body>
 <div class="bg-color">
   <form  method="post">




 
@Include('layouts.menuLogin')


         <input type="hidden" name="_token" value="{{ csrf_token() }}">


                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
                 <label for="Consumidor">Nome consumidor:</label>
			<input type="text" name="Consumidor" value="{{$nome}}" cLass="form-control" required/>

			</div>
			</div>



                      <div class="form-group">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Sexo">Sexo:</label>
				<label><input type="radio" name="Sexo" id="masc" value="{{$sexo}}"  required/>Masculino</label>
				<label><input type="radio" name="Sexo" id="fem" value="{{$sexo}}" required/>Feminino</label>

				</div>
			</div>

			                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="CEP">CEP:</label>
				<input type="text" name="CEP" value="{{$cep}}" cLass="form-control" id="cep" required/>

				</div>
			</div>

		                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
			    <label for="UF">UF:</label>
				<input type="text" name="UF" id="uf" cLass="form-control" value="{{$uf}}" required/>
					</div>
			</div>
					                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Cidade">Cidade:</label>
				<input type="text" name="Cidade" id="cidade" cLass="form-control" value="{{$CidadeConsumidor}}" required/>

		</div>
			</div>
					   
					                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Bairro">Bairro:</label>
				<input type="text" name="Bairro" id="bairro" cLass="form-control" value="{{$BairroConsumidor}}" required/>
		</div>
			</div>
				                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="TLogradouro">Tipo Logradouro:</label>
				<input type="text" name="TLogradouro" id="tipologradouro" cLass="form-control" value="{{$TipoLogradouroConsumidor}}" required/>
			
	</div>
			</div>


						                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
	<label for="Logradouro">Logradouro:</label>
				<input type="text" name="Logradouro" cLass="form-control" value="{{$LogradouroConsumidor}}" id="rua" required/>

					</div>
			</div>
			                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Numero">Numero:</label>
				<input type="text" name="Numero" cLass="form-control" value="{{	$NrEnderConsumidor}}" required/>
						</div>
			</div>

			               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="CompletmentoEnd">Complemento:</label>
				<input type="text" name="ComplementoEnd" cLass="form-control" value="{{$ComplEnderConsumidor}}"/>
							</div>
			</div>



			               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="TeleFixo">Telefone Fixo:</label>

				<input type="text" name="TeleFixo_DD" cLass="form-control" value="{{$DDDFixo}}" required/>
								</div>
			</div>


               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">

				<input type="text" id="Telefixo" cLass="form-control" name="Telefixo" value="{{$FoneFixo}}" required/>
						</div>
			</div>


''
			

               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">

				<label for="Celular">Celular</label>
				<input type="text" id="Celular_DD" name="Celular_DD" cLass="form-control" value="{{$DDDCelular}}" required/>
							</div>
			</div>


              <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<input type="text" id="Celular" name="Celular" cLass="form-control" value="{{$FoneCelular}}" required/>
									</div>
			</div>

          <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Email">Email:</label>
				<input type="email" name="Email" cLass="form-control" value="{{$EmailConsumidor}}" required/>
										</div>
			</div>

     


	           <div class="form-group ">
         
				

			         <div class="col-sm-4 offset-md-4">
                             
                       <div class="form-check form-check-inline">
		         	<label class="form-check-label" for="MatInfo" >
                          
                       
				<input type="checkbox" name="MatInfo" class="form-check-input" value="{{$AceitaMaterialInformativo}}"/>Material Informativo</label>
           </div>

                      <div class="form-check form-check-inline">
				<label class="form-check-label" for="UsoDados">

				<input type="checkbox" class="form-check-input" name="UsoDados" value="{{$AceitaUsodosDados}}"/>Uso de Dados:</label>
	                       </div>
								 </div>
								 	 </div>

								 	

    <div class="form-group">
                     <div class="col-sm-4 offset-md-4">
                     	      <div class="form-check form-check-inline">
								<label class="form-check-label" for="Correio">
				<input type="checkbox" name="Correio" id="correio" value="{{$AceitaCorreio}}"/>Correio:</label>
									 </div>

				 <div class="form-check form-check-inline">
				<label for="AceitaTele" class="form-check-label" >
				<input type="checkbox" name="AceitaTele" id="AceitaTele" value="{{$AceitaFone}}"/>Aceita telefone:</label>
								 </div>
                          </div>

                   </div>


               <div class="form-group ">

                     <div class="col-sm-4 offset-md-4">
                     	   	      <div class="form-check form-check-inline">

				<label for="AceitaSMS" class="form-check-label">
				<input type="checkbox" name="AceitaSMS" id="AceitaSMS" value="{{$AceitaSMS}}"/>>Aceita SMS:</label>
				 </div>
                 <div class="form-check form-check-inline">
				<label for="AceitaEmail" class="form-check-label">
			<input type="checkbox" id="AceitaEmail" name="AceitaEmail" value="{{$AceitaEmail}}"/>Aceita email:</label>
								 </div>
                          </div>
                       </div>




                 	<input type="hidden" name="CPFCadastro" value="{{$cartao}}"  required/>
				<input type="hidden" name="CPFCadastro" value="{{$cpf}}"  required/>
				<input type="hidden" name="DataNascCadastro" value="{{$DataNasc}}" required/>
				<input type="hidden" name="SenhaCadastro"  value="{{$senha}}" required/>
				<input type="hidden" name="Ean"  value="{{$ean}}" required/>
				<input type="hidden" name="NrCentral"  required/>



  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<input type="submit" name="submit2" value="Enviar"/>

																							</div>
			</div>


			</form>
  
  </div>

  </body>





    <script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

<script type="text/javascript">

$( document ).ready(function() {

    
    if($("#AceitaEmail").val()=='83'){
$('#AceitaEmail').prop('checked', true);
    }
    /* a função muda o background da div com id="box" */  
  if($("#AceitaSMS").val()=='83'){
$('#AceitaSMS').prop('checked', true);
    }

  if($("#AceitaTele").val()=='83'){
$('#AceitaTele').prop('checked', true);
    }

  if($("#AceitaFone").val()=='83'){
$('#AceitaTele').prop('checked', true);
    }

  if($("#AceitaFone").val()=='83'){
$('#AceitaFone').prop('checked', true);
    }

      if($("#UsoDados").val()=='83'){
$('#UsoDados').prop('checked', true);
    }

   if($("#MatInfo").val()=='83'){
$('#MatInfo').prop('checked', true);
    }

   if($("#correio").val()=='83'){
$('#correio').prop('checked', true);
    }


   if($("#correio").val()=='83'){
$('#correio').prop('checked', true);
    }




   if($("#masc").val()=='77'){
$('#masc').prop('checked', true);
    }

else{

$('#fem').prop('checked', true);

}



  });
</script>