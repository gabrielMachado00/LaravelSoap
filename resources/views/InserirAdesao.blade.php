
  
   
  @extends('layouts.adesao')





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


    <script>
    $(document).ready(function(){
     $("#Datanasc").mask("99/99/9999",{completed:function(){
       var pre_date = $("#Datanasc").val().split("/");
       if (pre_date[0] <= 31 && pre_date[1] <= 12 && pre_date[2] <= 2017 && pre_date[2] > 1901){
         var unmask_date = pre_date[2]+"-"+pre_date[1]+"-"+pre_date[0];
         $("#datanasc_unmask").attr('value', unmask_date);
         $('#blocknasc').addClass('hidden');
       }
       else {
         $('#datanasc').blur();
         $("#datanasc").val('');
         $('#blocknasc').removeClass('hidden');
       }
     }});
    });
    </script>


   <div class="bg-color">

    <form method="post" >








		         <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                 
                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
						<input type="text" name="CPF" id="CPF" class="form-control" value="CPF" required/>

					</div>
              
          </div>    
   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
      <input type="email" class="form-control " id="colFormLabelSm" placeholder="email">
    </div>
    </div>

                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

						<input type="text"  name="DataNasc" id="DataNasc" class="form-control"  autocomplete="off" value="" required/>
		              </div>
                  
                    </div>



                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

            <input type="text"  name="senha" id="senha" class="form-control"  autocomplete="off"  placeholder="senha" required/>
                  </div>
                  
                    </div>



                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
                 
				<select name="produto" id="produto" class="form-control" name="role_id">

             
            @foreach($produtos as $produto)
            <option value="{{$produto->EAN}}">{{ $produto->DESCRICAO }}</option>    
                 @endforeach
                            
                  
		             
                      
                      </select>

		                </div>
</div>


                  
                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
					 
						<input type="text" class="form-control" placeholder="Codigo do Profissional" name="CodProf"  required/>
	                      </div>
					</div>
           
             
                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
				
					<input type="text" class="form-control" id="UFProf" name="UFProf" value="" placeholder="UF" required/>

					
					</div>
                    </div>

                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
				
						<input type="text" class="form-control" name="NomeProf" placeholder="Nome do Profissional" required/>
							   </div>
					</div>
                      
      <input type="hidden" id="datanasc_unmask" name="dataNasc " value="" />
						<input type="hidden" name="Cartao" value="0" />


   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
<button class="btn btn-primary"  id="btnMensagem" class="form-control">Exibir mensagem</button>                
 </div>

		                </div>
		                  </div>


					</form>
		</div>

		                </div>