
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/resCarousel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong:300,400,400i,500,600,700" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/cuide.css">
 

<style>

.resCarousel{

  margin-top: 200px;  
}
        body {
            font-family: 'Trirong', serif;
            background: #eee;
        }
        
        .p0 {
            padding: 0;
        }
        
        .resCarousel-inner .item {
            /*border: 4px solid #eee;*/
            /*vertical-align: top;*/
            text-align: center;
        }
        
        .resCarousel-inner .item .tile div,
        .banner .item div {
            display: table;
            width: 100%;
            min-height: 100px;
            text-align: center;
            /*box-shadow: 0 1px 1px rgba(0, 0, 0, .1);*/
        }
            .resCarousel-inner .item .tile h3 {
           min-height: 5px;
        }
        
        .resCarousel-inner .item h1 {
            display: table-cell;
            vertical-align: middle;
            color: white;
        }
        
        .banner .item div {
            background: url('demoImg.jpg') center top no-repeat;
            background-size: cover;
            min-height: 550px;
        }

    .item{



    }

        .item .tile  {


   
    width: 250px;
      border-color: white;
      border-width: 5px;

        }
          .item  h5 {
margin-left: -100px;
color: #522e92;
  
        }

      .item  p {
margin-left: -100px;
color: #522e92;
  
        }


        .item .tile div {

background-color: black;
         
            background-size: cover;
            height: 50px;
          
            color: white;
        }

          .item .tile .crianca {
 background: url(../img/plantas_azuis.jpg) ;
            background-size: cover;
         
            color: white;
        }
        
        .item div h1 {
            background: rgba(0, 0, 0, .4);
        }
    </style>

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
   
                   <li class="" ><a href="{{ url('/LoginGeral') }}">Login</a></li>
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

             <div class="col-md-2 col-sm-2 col-xs-2 ">
            <a href="#"  class="btn btn-default btn-circle4"><p>Saude 
            </p><p>da Mulher</p></a>
             </div>
</a>

   </div>


<div class="col-md-2  col-sm-2 col-xs-2  offset-md-4">
            <a href="#"   class="btn btn-default btn-circle2"><p>Diabetes</p></a>
             </div>

  <div class="col-md-1  col-sm-1 col-xs-1  offset-md-4">
            <a href="#"  class="btn btn-default btn-circle"><p>Hipertensão</p></a>
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
<iframe style="width: 90%; height: 300px; " frameborder="0" scrolling="NO" id="frame" name="frame" ></iframe>
</div>
</div>


<div class="row">
          <div class="col-md-12">
 

   <div class="container p8">
     
        <div class="resCarousel" data-items="2-3-3-3" data-slide="3" data-speed="900" data-animator="lazy">
            <div class="resCarousel-inner">

                <div class="item">
                    <div class="tile">
                        <div>
                   
                        </div>
                     
                    </div>
                       <h5>Title</h5>
                        <p>content</p>
                </div>

                <div class="item">
                    <div class="tile">
                        <div id="cria" class="crianca">
          
                        </div>
                      
                    </div>

                        <h5>Title</h5>
                        <p>content</p>
                </div>

                <div class="item">
                    <div class="tile">
                        <div>
                         
                        </div>
                      
                    </div>
                      <h5>Title</h5>
                        <p>content</p>
                </div>

               

            </div>
            <button class='btn btn-default leftRs'>          <i class="fa fa-chevron-left fa-lg text-muted"></i></button> 
            <button class='btn btn-default rightRs'>            <i class="fa fa-chevron-right fa-lg text-muted"></i></button>
        </div>
    </div>

       </div>

</section>







<script>
  
$('#cria').on("click",function (e) { 
      e.preventDefault();
      $('#frame').prop("src", "http://localhost:8000/CuideSe#");
});


</script>
    <script>
        //ResCarouselCustom();
        var pageRefresh = true;

        function ResCarouselCustom() {
            var items = $("#dItems").val(),
                slide = $("#dSlide").val(),
                speed = $("#dSpeed").val(),
                interval = $("#dInterval").val()

            var itemsD = "data-items=\"" + items + "\"",
                slideD = "data-slide=\"" + slide + "\"",
                speedD = "data-speed=\"" + speed + "\"",
                intervalD = "data-interval=\"" + interval + "\"";


            var atts = "";
            atts += items != "" ? itemsD + " " : "";
            atts += slide != "" ? slideD + " " : "";
            atts += speed != "" ? speedD + " " : "";
            atts += interval != "" ? intervalD + " " : ""

            //console.log(atts);

            var dat = "";
            dat += '<h4 >' + atts + '</h4>'
            dat += '<div class=\"resCarousel\" ' + atts + '>'
            dat += '<div class="resCarousel-inner">'
            for (var i = 1; i <= 14; i++) {
                dat += '<div class=\"item\"><div><h1>' + i + '</h1></div></div>'
            }
            dat += '</div>'
            dat += '<button class=\'btn btn-default leftRs\'><i class=\"fa fa-fw fa-angle-left\"></i></button>'
            dat += '<button class=\'btn btn-default rightRs\'><i class=\"fa fa-fw fa-angle-right\"></i></button>    </div>'
            console.log(dat);
            $("#customRes").html(null).append(dat);

            if (!pageRefresh) {
                ResCarouselSize();
            } else {
                pageRefresh = false;
            }
            //ResCarouselSlide();
        }

        $("#eventLoad").on('ResCarouselLoad', function() {
            //console.log("triggered");
            var dat = "";
            var lenghtI = $(this).find(".item").length;
            if (lenghtI <= 30) {
                for (var i = lenghtI; i <= lenghtI + 10; i++) {
                    dat += '<div class="item"><div class="tile"><div><h1>' + (i + 1) + '</h1></div><h3>Title</h3><p>content</p></div></div>'
                }
                $(this).append(dat);
            }
        });
    </script>
    <script src="js/resCarousel.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>








</body>







</html>
