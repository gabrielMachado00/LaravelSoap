
  
   
       @extends('layouts.app')





        @section('content')





<form method="post"> 



		         <input type="hidden" name="_token" value="{{ csrf_token()}}">


                               <div class="form-group">
						<label for="CPF">CPF</label>
						<input type="text" name="CPF" class="form-control" id="cpf"  required/>

					</div>

						<label for="Senha">Senha</label>

						<input type="text" id="senha" name="Senha"  required/>
					
					

<button class="btn btn-primary"  id="btnMensagem" data-toggle="modal" data-target="#modal-mensagem">Exibir mensagem</button>
					</form>

   @show
    
