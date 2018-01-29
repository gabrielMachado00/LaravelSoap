
 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/adesao.css')}}" rel="stylesheet">

  </head>


<body>
   <div class="bg-color">
@Include('layouts.menuBot')
        <div class="row">
          <div class="col-md-4 offset-md-4">

          
                 <p class="cadastro1">Novo</p>

                  <p class="cadastro2">Cadastro</p>
          </div>  
        </div>




   @if(!empty($status))


<h1>{{$texto}}</h1>

@endif


    <form method="post">



             <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                 
                      <div class="form-group row">
  
   

 

              
          </div>    
   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
      <input type="email" class="form-control " id="colFormLabelSm" onblur="myFunction()" placeholder="email">
    </div>
    </div>

                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

            <input type="text"  name="DataNasc" id="DataNasc" class="form-control" placeholder="Data de Nascimento" autocomplete="off" value="" required/>
                  </div>
                  
                    </div>



               


                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           
                 
        <select name="produto" id="produto" class="form-control" placeholder="produto" name="role_id">

             
            @foreach($produtos as $produto)
            <option value="" disabled selected>Selecione um produto</option>
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
                           
        
            <input type="text" class="form-control" name="NomeProf" placeholder="Nome do Profissional" onblur="myFunction()" required/>
                 </div>
          </div>

                    <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                           

            <input type="text"  name="senha" id="senha" class="form-control"  autocomplete="off" onblur="myFunction()" placeholder="senha" required/>
                  </div>
                  
                    </div>
              <div class="form-group row">
         
                     <div class="col-sm-4 offset-md-4">
           <div class="form-check form-check-inline">
      
             <div class="mostrarRadio">
        <input type="radio" class="form-check-input" name="mostrar" />  <label class="form-check-label" for="mostrar">mostrar senha</label>
        </div>
                         </div>
                 </div>
                   </div>
      <input type="hidden" id="datanasc_unmask" name="dataNasc " value="" />
            <input type="hidden" name="Cartao" value="0" />


   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-5">
<button class="btn btn-primary btnMensagem"   >Próximo</button>                
 </div>

                    </div>
                      </div>


          </form>


     <!---->
    <section id="PassoApasso">
      <div class="container">
         <div class="row">

                     <div class="col-md-2 offset-md-4 filho">
        <h1>1</h1>
           </div>
             <div class="col-sm-2 ">
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

    <p class="aceita">O Usuário aceita e autoriza que os seus Dados Pessoais sejam objeto de </p>

 


 <p class="aceita1">tratamento por parte da MERCK,a qual o Usuário declara ter plena ciência </p>
  
       <div class="aceita2">
  <p>e compreensão de suas disposições
  </p>
         </div>
  </div>
</div>
  <div class="row">
 <div class="col-sm-6  offset-md-5">
  


<button type="button" id="botao" class="btn btn-primary">Cadastrar</button>

                         </div>




                       </div>

                       </div>


                    </div>
</section>    


<footer>

      <div class="container">
        <form class="form form-inline" role="form">
        <div class="row no-gutters">
          <div class="col-xs-2">



     

                     <p class="sac"> 0800 772-3322 </p>
                
                         
             <p class="sac2"> Sac Merck cuida</p>
                </div>







         
    </div>


      <div class="col-xs-2">
        <div class="form-inline">
        <div class="cadastro" id="cadastrar">
      <a href="#services" class="btn-Cadastro">Cadastre-se</a>
   </div>
      </div>
       </div>


         <div class="col-sm-2 col-xs-2">
                 <div class="form-inline">
   <div class="Login">
            <a  href="#services" class="btn-Login">Login</a>
          </div>

 </div>


 </div>



      <div class="col-sm-1 col-xs-1">

         <div class="bulario">
      <a href="#services" class="btn-Bulario">Bulário</a>
   </div>


 </div>

      

    
           <div class="col-sm-3 col-xs-3">

   
    <p class="TextoMerck1">M</p>
    <div>



    <div class="col-sm-3 TextoMerck2">
     <p>Merck Atende</p>
</div>

      </div>
  


 </form>


          </div>
    </footer>


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



<script type="text/javascript">


  function myFunction() {
  $("input").click(function(){
    
    /* a função muda o background da div com id="box" */  
    $("input").css("background","#522e92");
  
  }
</script>


  </body>


</html>