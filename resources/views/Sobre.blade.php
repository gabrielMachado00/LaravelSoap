<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

   


   @extends ('layouts.Sobre')



<body>	


  	  <div class="header">



      <div class="bg-color">

@Include('layouts.menuBot')
    		 <div class="row">
	 <div class="col-md-6">
-

<div id="Texto">  
<p>O que é</p>

</div>



<div id="Texto2">
  <p>Merck Cuida?</p>
</div>



<div id="div1">
	<p class="text-sm-left">
 	Merck Cuida é um programa de descontos que tem a finalidade de 

</p>

	<p>
 	incentivar o paciente em manter a adesão ao tratamento prescrito pelo</p>


 	<p> médico.Os descontos são oferecidos na aquisição de alguns medicamentos </p>

<p>
 		comercializados
 	pela Merck.
 		</p>

 	</div>




<div id="div2">	
<p>
 	Para saber como se beneficiar do desconto basta
</p>
</div>	


<div id="roxo">
 	<p> 

 		<a href="#"> fazer download do regulamento</a></a><p>
        </p>
    </div>
    <div id="div3">
<p > Nele,Temos todas as informações necessárias para seu atendimento </p>

</div>


</div>


		 <div class="col-md-6">

<img src="img/mulher_yoga.png" height="42" width="42">

	
		 </div>






</div>


</div>


          </div>












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




       <div class="row no-gutters">


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

      </div>

    
           <div class="col-md-2 col-sm-2 ">
 <div class="TextoMerck1">
   
M
    </div>
</div>

<div class="row">
      <div class="col-md-12 col-sm-12">
    <div class="TextoMerck2">
     Merck Atende
</div>

      </div>
  </div>







 </form>


          </div>




           <div class="row no-gutters">
          <div class="col-xs-3 offset-md-6">

<div class="merckDam">
  © Merck KGaa,Darmstadt,Germany

</div>

          </div>
        </div>

    </footer>




   

    <script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>

</body>
  

</html>