
<head>
    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

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

    

   <form  method="post">






         <input type="hidden" name="_token" value="{{ csrf_token() }}">


                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
                 <label for="Consumidor">Nome consumidor:</label>
			<input type="text" name="Consumidor" value="{{$nome}}" required/>

			</div>
			</div>



                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Sexo">Sexo:</label>
				<label><input type="radio" name="Sexo" value="77" required/>Masculino</label>
				<label><input type="radio" name="Sexo" value="70" required/>Feminino</label>

				</div>
			</div>

			                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="CEP">CEP:</label>
				<input type="text" name="CEP" value="{{$cep}}" id="cep" required/>

				</div>
			</div>

		                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
			    <label for="UF">UF:</label>
				<input type="text" name="UF" id="uf" value="{{$uf}}" required/>
					</div>
			</div>
					                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Cidade">Cidade:</label>
				<input type="text" name="Cidade" id="cidade" value="{{$CidadeConsumidor}}" required/>

		</div>
			</div>
					   
					                    <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Bairro">Bairro:</label>
				<input type="text" name="Bairro" id="bairro" value="{{$BairroConsumidor}}" required/>
		</div>
			</div>
				                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="TLogradouro">Tipo Logradouro:</label>
				<input type="text" name="TLogradouro" id="tipologradouro" value="{{$TipoLogradouroConsumidor}}" required/>
			
	</div>
			</div>


						                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
	<label for="Logradouro">Logradouro:</label>
				<input type="text" name="Logradouro" value="{{$LogradouroConsumidor}}" id="rua" required/>

					</div>
			</div>
			                  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Numero">Numero:</label>
				<input type="text" name="Numero"  value="{{	$NrEnderConsumidor}}" required/>
						</div>
			</div>

			               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="CompletmentoEnd">Complemento:</label>
				<input type="text" name="ComplementoEnd" value="{{$ComplEnderConsumidor}}"/>
							</div>
			</div>



			               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="TeleFixo">Telefone Fixo:</label>

				<input type="text" name="TeleFixo_DD" value="{{$DDDFixo}}" required/>
								</div>
			</div>


               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">

				<input type="text" id="Telefixo" name="Telefixo" value="{{$FoneFixo}}" required/>
						</div>
			</div>


''
			

               <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">

				<label for="Celular">Celular</label>
				<input type="text" id="Celular_DD" name="Celular_DD" value="{{$DDDCelular}}" required/>
							</div>
			</div>


              <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<input type="text" id="Celular" name="Celular" value="{{$FoneCelular}}" required/>
									</div>
			</div>

          <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Email">Email:</label>
				<input type="email" name="Email" value="{{$EmailConsumidor}}" required/>
										</div>
			</div>

      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="MatInfo">Material Informativo:
				<input type="checkbox" name="MatInfo" value="{{$AceitaMaterialInformativo}}"/></label>

												</div>
			</div>

			     <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="UsoDados">Uso de Dados:
				<input type="checkbox" name="UsoDados" value="{{$AceitaUsodosDados}}"/></label>
														</div>
			</div>


	     <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="Correio">Correio:
				<input type="checkbox" name="Correio" value="{{$AceitaCorreio}}"/></label>
																</div>
			</div>


  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="AceitaTele">Aceita telefone:
				<input type="checkbox" name="AceitaTele" value="{{$AceitaFone}}"/></label>
				<label for="AceitaSMS">Aceita SMS:
				<input type="checkbox" name="AceitaSMS" value="{{$AceitaSMS}}"/></label>
																	</div>
			</div>



  <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
				<label for="AceitaEmail">Aceita email:
				<input type="checkbox" name="AceitaEmail" value="{{$AceitaEmail}}"/></label>
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
  