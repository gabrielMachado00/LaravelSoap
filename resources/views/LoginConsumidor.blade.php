
  
   
  @extends('layouts.app')





@section('content')








    <form method="post" >








                                 
                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
            <input type="text" name="CPF" id="CPF" class="form-control" value="CPF" required/>

          </div>
              
          </div>    
   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
      <input type="password" class="form-control" name="Senha"  id="Senha" placeholder="Senha">
    </div>
    </div>

                      </div>
    <input type="submit" name="submit2" value="Enviar"/>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>

@stop