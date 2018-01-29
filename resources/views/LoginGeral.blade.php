







 
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