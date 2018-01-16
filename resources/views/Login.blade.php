
  
   
  @extends('layouts.adesao')





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>



   <div class="bg-color">

    <form method="post" >






      <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                 

         
   
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
                           

            <input type="text"  name="DataNasc" id="DataNasc" class="form-control"  autocomplete="off" value="" required/>
                  </div>
                  
                    </div>


                

          </form>
    </div>

                    </div>