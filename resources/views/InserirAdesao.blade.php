
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




        <input type="text" id="datanasc" name="datanasc"  required/>
            

  <input type="hidden" id="datanasc_unmask" name="DataNasc" value="" />



   <div class="form-group row">
  
    <div class="col-sm-4 offset-md-5">
<button class="btn btn-primary btnMensagem"  id="mensagem" >Próximo</button> 
<input type="hidden" name="_token" value="{{ csrf_token() }}">               
 </div>

                    </div>
                      </div>




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
          <div class="col-xs-3">



           <div class="sac">

                     <p> 0800 772-3322 </p>
                 </div>

                             <div class="sac2">
             <p> Sac Merck cuida</p>
                </div>







         
    </div>

</div>




       <div class="row">


      <div class="col-xs-1">
        <div class="form-inline">
        <div class="cadastro">
      <a href="#services" class="btn-Cadastro">Cadastre-se</a>
   </div>
      </div>
       </div>


         <div class="col-xs-1">
                 <div class="form-inline">
   <div class="Login">
            <a  href="#services" class="btn-Login">Login</a>
          </div>

 </div>


 </div>



      <div class="col-xs-2">

         <div class="bulario">
      <a href="#services" class="btn-Bulario">Bulário</a>
   </div>


 </div>




 </div>

        </div>

 </form>


   





       </div>
    </footer>



 <!-- Bootstrap core JavaScript -->
   


      


  </body>
</html>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <script>
    $(document).ready(function(){
     $("#datanasc").mask("99/99/9999",{completed:function(){
       var pre_date = $("#datanasc").val().split("/");
       if (pre_date[0] <= 31 && pre_date[1] <= 12 && pre_date[2] <= 2017 && pre_date[2] > 1901){
         var unmask_date = pre_date[2]+"-"+pre_date[1]+"-"+pre_date[0];
         $("#mensagem").click( function()
         {
           alert(unmask_date);
         }
      );

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
