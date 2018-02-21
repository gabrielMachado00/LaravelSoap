







 
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
    <link href="{{ asset('css/Login.css')}}" rel="stylesheet">

  </head>


<body>
   <div class="bg-color">
@Include('layouts.menuBot')
    
 


   @if(!empty($status))


<h1>{{$texto}}</h1>

@endif

</div>

<div class"container">

<div class="row">
<div class="col-md-6">


<a href=""><img  src="img/encontar-medicos-1.jpg" height="700" class="img-responsive " width="1000" >   </a>
 <h1 class="centered">
      <span>Sou médico</span>
    </h2>


</div>


<div class="col-md-6">

<a href="/LoginConsumidor"><img  src="img/pacientes.jpg" height="700" class="img-responsive pacientes " width=""></a>
 <h1 class="centered">
      <span>Sou Paciente</span>
    </h1>
</div>
</div>

</div>
 


 <!-- Bootstrap core JavaScript -->
    <script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('js/bootstrap.js')}}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>

  </body>











  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
   

        <h1 class="MCuida">MCuida</h1>
        <h2 class="desconto">Desconto de até 40% em medicamentos</h2>
      
        <div class="actions">
          <a href="#services" class="btn-services">Cadastre-se</a>
          <a href="/LoginGeral" class="btn-get-started">Login</a>
          
        </div>
      </div>
    </div>
  </section>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>






  <section id="sobre">
    <div class="container">


   


   @extends ('layouts.Sobre')






      <div class="header">



      <div class="bg-color1">

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







</div>
<section>















  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="jotaS/custom.js"></script>

<script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>







