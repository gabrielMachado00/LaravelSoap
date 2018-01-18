
   <div class="bg-color">

    <form method="post" >








		         <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                 
                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
						<input type="text" name="Nome" id="Cartao" class="form-control" value="CPF" required/>

					</div>
              
          </div>    




                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

						<input type="text"  name="Cartao" id="Cartao" class="form-control"  autocomplete="off" value="" required/>
		              </div>
                  
                    </div>



                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

            <input type="text"  name="produto" id="produto" class="form-control"  autocomplete="off"  placeholder="Produto" required/>
                  </div>
                  
                    </div>


                            
                 
            <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

            <input type="text"  name="ean" id="ean" class="form-control"  autocomplete="off"  placeholder="Produto" required/>
                  

		                </div>
          </div>




                  
                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
					 
						<input type="text" class="form-control" placeholder="Codigo do Profissional" name="desconto"  required/>
	                      </div>
					</div>
           
             
                



      <input type="hidden" id="datanasc_unmask" name="dataNasc " value="" />
						<input type="hidden" name="Cartao" value="0" />



		                  </div>


					</form>
		</div>