
  
   
       @extends('layouts.app')









<script>
$(document).ready(function(){
  $('.datanasc').mask('11/11/1111');

});
</script>


<form method="post"> 



		         <input type="hidden" name="_token" value="{{ csrf_token()}}">


                               <div class="form-group">
						<label for="CPF">CPF</label>
						<input type="text" name="CPF" id="CPF" class="form-control"  required/>

					</div>

					
						<label for="DataNasc">Data Nascimento</label>
						<input type="text" id="datanasc" name="datanasc"  required/>
						<label for="Senha">Senha</label>
						<input type="password"  name="Senha" id="senha" autocomplete="off" value="" required/>
		

				<select name="produto" id="produto" class="form-control m-bot15" name="role_id">

                      
           
                  
            @foreach($produtos as $produto)
            <option value="{{$produto->EAN}}">{{ $produto->DESCRICAO }}</option>    
                 @endforeach
                            
                  
                      
                      </select>
					  <label for="CodProf">Codigo Profissional</label>
						<input type="text" name="CodProf"  required/>
						<label for="UFProf">UF Profissional</label>
						<input type="text" id="UFProf" name="UFProf" value="" required/>
						<label for="NomeProf">Nome Profissional</label>
						<input type="text" name="NomeProf" value="" required/>
						<input type="hidden" name="Cartao" value="0" />
						<input type="hidden" id="EAN" name="EAN" value="" />

<button class="btn btn-primary"  id="btnMensagem" data-toggle="modal" data-target="#modal-mensagem">Exibir mensagem</button>
					</form>
