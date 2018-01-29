

 @Include('layouts.consumidor')

    <!-- Adicionando JQuery -->

    <!-- Adicionando JQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link href="{{ asset('css/consumidor.css')}}" rel="stylesheet">
        
<script>
	$(document).ready(function () { 
$('#Telefixo').mask('9999-9999');
$('#Celular').mask('99999-9999');

});



</script>
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


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>




<body>	




     <div class="bg-color">

@Include('layouts.menuBot')

   <form action="/Cadastro/Consumidor" method="post">



  <p>{{ session()->get('cpfSession') }}</p>


         <input type="hidden" name="_token" value="{{ csrf_token() }}">

               <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
                 <label for="Consumidor">Nome consumidor:</label>

             </div>
         </div>
                <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
				<input type="text" name="Consumidor" class="form-control" required/>
				<label for="Sexo">Sexo:</label>
				       </div>
         </div>


          <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label><input type="radio" name="Sexo" value="77" class="form-control" required/>Masculino</label>
				<label><input type="radio" name="Sexo" value="70" class="form-control" required/>Feminino</label>

							       </div>
         </div>

    <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="CEP">CEP:</label>
				<input type="text" name="CEP" id="cep" class="form-control" required/>

										       </div>
         </div>

 <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
			    <label for="UF">UF:</label>
				<input type="text" name="UF" id="uf" class="form-control" required/>
													       </div>
         </div>

 <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="Cidade">Cidade:</label>
				<input type="text" name="Cidade"  class="form-control" id="cidade" required/>


             </div>
         </div>

          <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="Bairro">Bairro:</label>
				<input type="text" name="Bairro" class="form-control" id="bairro" required/>
				 </div>
         </div>

          <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="TLogradouro">Tipo Logradouro:</label>
				<input type="text" name="TLogradouro" class="form-control" id="tipologradouro" required/>
						 </div>
         </div>



          <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="Logradouro">Logradouro:</label>
				<input type="text" name="Logradouro" id="rua" class="form-control" required/>
	     </div>
           </div>


 <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
				<label for="Numero">Numero:</label>
				<input type="text" name="Numero" class="form-control" required/>

				 </div>
           </div>

            <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">

				<label for="CompletmentoEnd">Complemento:</label>
				<input type="text" class="form-control" name="ComplementoEnd"/>

						 </div>
           </div>


           <div class="form-group row">
                     <div class="col-sm-1 offset-md-4">
				
					<label for="Email">DDD Fixo</label>
				<input type="text" name="TeleFixo_DD" class="form-control" maxlength="2" required/>

				    </div>

				      <div class="col-sm-3 ">
				      				<label for="Email">Telefone fixo</label>
				<input type="text" id="Telefixo" name="Telefixo"  class="form-control" required/>
				 </div>
           </div>

			           <div class="form-group row">
                     <div class="col-sm-1 offset-md-4">
		<label for="Email">DDD</label>
				<input type="text" id="Celular_DD" maxlength="2" name="Celular_DD" class="form-control" required/>
      </div>
				<div class=" col-sm-3 ">
			<label for="Email">Número Celular</label>
				<input type="text" id="Celular" class="form-control" name="Celular" required/>
					 </div>
           </div>


			           <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">

				<label for="Email">Email:</label>
				<input type="email" name="Email" class="form-control" required/>
						 </div>
           </div>



	           <div class="form-group row">
         
				

			         <div class="col-sm-4 offset-md-4">
                             
                       <div class="form-check form-check-inline">
		         	<label class="form-check-label" for="MatInfo" >
                          
                       
				<input type="checkbox" name="MatInfo" class="form-check-input" value="83"/>Material Informativo</label>
           </div>

                      <div class="form-check form-check-inline">
				<label class="form-check-label" for="UsoDados">

				<input type="checkbox" class="form-check-input" name="UsoDados" value="83"/>Uso de Dados:</label>
	                       </div>
								 </div>
								 	 </div>

								 	

    <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                     	      <div class="form-check form-check-inline">
								<label class="form-check-label" for="Correio">
				<input type="checkbox" class="form-check-input" name="Correio" value="83"/>Correio:</label>
									 </div>

				 <div class="form-check form-check-inline">
				<label for="AceitaTele" class="form-check-label" >
				<input type="checkbox" name="AceitaTele" class="form-check-input" value="83"/>Aceita telefone:</label>
								 </div>
                          </div>

                   </div>


               <div class="form-group row">

                     <div class="col-sm-4 offset-md-4">
                     	   	      <div class="form-check form-check-inline">

				<label for="AceitaSMS" class="form-check-label">
				<input type="checkbox" class="form-check-input" name="AceitaSMS" v value="83"/>Aceita SMS:</label>
				 </div>
                 <div class="form-check form-check-inline">
				<label for="AceitaEmail" class="form-check-label">
				<input type="checkbox" name="AceitaEmail" class="form-check-input" value="83"/>Aceita email:</label>
								 </div>
                          </div>
                       </div>

				<input type="hidden" name="CPFCadastro"  value="{{$cpf}}"  required/>
				<input type="hidden" name="DataNascCadastro" value="{{$DataNasc}}" required/>
				<input type="hidden" name="SenhaCadastro"  value="{{$senha}}" required/>
				<input type="hidden" name="Descricao"  value="{{$descricao}}" required/>
				<input type="hidden" name="Ean"  value="{{$ean}}" required/>
				<input type="hidden" name="NrCentral"  required/>
		    <input type="hidden" name="nrCentral"  value="{{$nrCentral}}" required/>

		             <div class="form-group row">

                     <div class="col-sm-4 offset-md-4">
				<input type="submit" name="submit2" class="btn btn-primary btnEnviar"  value="Enviar"/>
				   </div>
                       </div>
			</form>

		
     <!---->
    <section id="PassoApasso">
      <div class="container">
         <div class="row">

                     <div class="col-md-2 offset-md-4 ">
        <h1>1</h1>
           </div>
             <div class="col-sm-2 filho">
        <h1>2</h1>
           </div>

             <div class="col-sm-4 ">
        <h1>3</h1>
           </div>
                       </div>



                    </div>
</section>



    <section id="Autorizo">
      <div class="container">
         <div class="row">

  <div class="col-sm-6  offset-md-3">
     <div class="Autorizo">
    <p>Autorizo <span class="last-letter">*</span></p>
</div>
  </div>
                       </div>


      <div class="row">

   <div class="col-sm-6  offset-md-3">
   <div class="aceita">

      </div>
         <div class="aceita1">

       </div>
       <div class="aceita2">
 
         </div>
  </div>

 </div>


  <div class="row">
 <div class="col-sm-6  offset-md-5">
  


                         </div>




                       </div>

                       </div>


                    </div>
</section>    


<footer>

      <div class="container">
        <form class="form form-inline" role="form">
        <div class="row no-gutters">
          <div class="col-xs-3">



           <div class="sac">

                     <p> 0800 772-3322 </p>
                 </div>

                             <div class="sac2">
             <p> Sac Merck cuida</p>
                </div>







         
    </div>


      <div class="col-xs-2">
        <div class="form-inline">
        <div class="cadastro">
      <a href="#services" class="btn-Cadastro">Cadastre-se</a>
   </div>
      </div>
       </div>


         <div class="col-xs-2">
                 <div class="form-inline">
   <div class="Login">
            <a  href="#services" class="btn-Login">Login</a>
          </div>

 </div>


 </div>



      <div class="col-xs-1">

         <div class="bulario">
      <a href="#services" class="btn-Bulario">Bulário</a>
   </div>


 </div>

      

    
           <div class="col-xs-3">
 <div class="TextoMerck1">
   
    <p>M</p>
    <div>



    <div class="TextoMerck2">
     <p>Merck Atende</p>
</div>

      </div>
  


 </form>


          </div>
    </footer>

          </div>
 <!-- Bootstrap core JavaScript -->
    <script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>
          <body>	
