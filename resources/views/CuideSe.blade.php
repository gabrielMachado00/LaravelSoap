<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Baker Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/cuide.css">
 



</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#"><span class="logo-dec">M</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-center">
                  <li class=""><a href="{{ url('Login') }}">Home</a></li>
                  <li class=""><a href="{{ url('Sobre') }}">Sobre</a></li>
                  <li class=""><a href="{{ url('ProcureLoja') }}">Redes Credenciadas</a></li>
                   <li class=""><a href="{{ url('/CuideSe') }}">Blog-Cuide-se</a>
            </li>

              <li class="" ><a href="{{ url('/Cadastro/Adesao') }}">Cadastro</a></li>
   
                 
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
           
  <h2 class="bnr-sub-title">Mcuide-se</h2>
          
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6">

          	<h2 class="bnr-Escolha">Escolha </h2>
          	     	<h2 class="bnr-Tags">as Tags</h2>

                  <p class="veja">ou veja todo o conteudo</p>
          </div>  
        </div>


<div class="container">
        <div class="row no-gutters ">


         </div>  
        </div>



 <div class="container">
        <div class="row no-gutters ">

<div class="col-md-2  col-sm-2 col-xs-2  offset-md-4">
<p>Saude 
            </p><p>da Mulher</p></a>
             </div>

             <div class="col-md-2 col-sm-2 col-xs-2 ">
            <a href="#"  class="btn btn-default btn-circle4"></a>

   </div>


<div class="col-md-2  col-sm-2 col-xs-2  offset-md-4">
            <a href="#"   class="btn btn-default btn-circle2"><p>Diabetes</p></a>
             </div>

  <div class="col-md-1  col-sm-1 col-xs-1  offset-md-4">
            <a href="#"  class="btn btn-default btn-circle"><p>Hipertensão</p></a>
             </div>
     
                       <div class="col-md-1 col-sm-1 col-xs-1">
            <a href="#"  class="btn btn-default btn-circle5"><p> Osteoartrite</p></a>

   </div>               

                        
                          <div class="col-md-1 col-sm-1 col-xs-1">

            <a href="#"  class="btn btn-default btn-circle6"><p> Saúde</p><p> do Homem </p></a>

   </div>   

                            <div class="col-md-1 col-sm-1 col-xs-1">

            <a href="#"  class="btn btn-default btn-circle7"><p>Doenças</p><p> Cardiovasculares</p></a>

   </div>          

</div>



      </div>
      

<div class="container">
        <div class="row">



           

   </div>


</div>

      </div>
    </section>
    <!---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script>

$('.btn-circle4').click(function(){
    $('#imageCarousel').slideToggle('slow');
});

    </script>

    <script>
$(document).ready(function(){
    $('#imagem').click(function (e) { 
      e.preventDefault();
      $('#frame').attr("src", $(this).attr("href"));
})
   });
     
        </script>

    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left">
            <h2 class="service-title pad-bt15">Posts</h2>
            <h2 class="service-title1 pad-bt15"> Relacionados</h2>
            
</div>
</div>

<div class="row">
          <div class="col-md-12 text-left">
<iframe style="width: 90%; height: 200px;" id="frame" name="internal"></iframe>
</div>
</div>

<div class="row">
          <div class="col-md-12">
 
 <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
          </div>
          <!-- add  more items here -->
          <!-- Example item start:  -->
           
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
          </div>
           
          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>






               </div>
  </div>

</div>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="js/jquery.min.js">
      
/* Downloaded from https://www.codeseek.co/ */
// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});
 
// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
   
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

      
    </script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $("a").click(function(e) {
        e.preventDefault();
        
        $("#someFrame").attr("src", $(this).attr("href"));
    })
});
</script>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
 
    <!---->
    <!--
    <!---->
    <!---->
  

      </div>
    <!---->
  </div>
	  <script src="js/jquery.min.js"></script>
	  <script src="js/jquery.easing.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/wow.js"></script>
	  <script src="js/jquery.bxslider.min.js"></script>
	  <script src="js/custom.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
