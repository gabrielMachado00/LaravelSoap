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
    <link href="{{ asset('css/AtualizaAdesao.css')}}" rel="stylesheet">

  </head>


<body>
   <div class="bg-color">
@Include('layouts.MenuLogin')
      



    <form method="post">



		         <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                 
                      <div class="form-group row">
  
    <div class="col-sm-4 offset-md-4">
         <label class="col-sm-12 offset-md-3"> Nome</label>
						<input type="text" name="nome"  class="form-control" value="{{$nome}}" required/>

					</div>
              
          </div>    
   <div class="form-group row">
  

    <div class="col-sm-4 offset-md-4">
        <label class="col-sm-12 offset-md-3">Cartao</label>
      <input type="email" class="form-control " id="colFormLabelSm" value="{{$cartao}}">
    </div>
    </div>


           <div class="form-group row">
      
                     <div class="col-sm-4 offset-md-4">
                               <label class="col-sm-12 offset-md-3">Barras</label>     

            <input type="text"  name="DataNasc" id="DataNasc" class="form-control" placeholder="Data de Nascimento" autocomplete="off" value="{{$ean}}" required/>
                  </div>
                  
                    </div>



                         <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                              <label class="col-sm-12 offset-md-3">Produto</label>

						<input type="text"  name="DataNasc" id="DataNasc" class="form-control" placeholder="Data de Nascimento" autocomplete="off" value="" required/>
		              </div>
                  
                    </div>


   <div class="form-group row">
                     <div class="col-sm-4 offset-md-4">
                               <label class="col-sm-12 offset-md-3">Desconto</label>

            <input type="text"  name="DataNasc" id="DataNasc" class="form-control" autocomplete="off" value="{{$desconto}}%" required/>
                  </div>
                  
                    </div>

               </body>