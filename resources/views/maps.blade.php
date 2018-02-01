
       @extends('layouts.maps')



@section('content')



    <div class="header">
   <div class="bg-color">
@Include('layouts.menuBot')
        <div class="row no-gutters">
   

   <div class="col-xs-12">
<div id="Busca">
<p>Busca </p>
</div>

<div id="Busca2">
<p>de redes Credenciadas</p>
</div>



</div>
</div>

            <div class="row no-gutters">

     <div class="col-xs-3">
  <form class="form-inline" role="form">
<div class="form-group">

<input type="text" id="search" name="buscar" class="form-control">
</div>

 </form>
       </div>


     <div class="col-xs-3 offset-sm-1">

     <div class="raio" > 

<div class="form-inline" >


             <label >Raio</label>
        <select id="memoryType"  class="form-control">

            <option value="GB" selected="selected">100</option>
            <option value="GB" selected="selected">50</option>
            <option value="MB">25</option>
        </select>
    </div>
   </div>
   
 
</div>


     <div class="col-xs-3">
<div class="resultados" >

    <div class="form-inline">
             <label >Resultados</label>
        <select id="memoryType"  class="form-control">
            <option value="GB" selected="selected">25</option>
            <option value="MB">50</option>
              <option value="MB">100</option>
        </select>
    </div>

     </div>
 

</div>


     <div class="col-xs-3">
      
<div class="form-group" >
<button type="submit" class="fa fa-search fa-lg" >

</button>
 
     </div>


</div>


</div>

    <div class="row">
   <div class="col-xs-6 ">

<img src="img/garotinha.png" height="42" width="42">


</div>
   <div class="col-md-6 offset-md-2">



<div id="map"></div>

 </div>



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

    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyDyNHjMcC4PsU3IEkziUc-a3qDMgLxkRnw&callback=initMap">
    </script>

  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.js"></script>
    <script src="js/bootstrap.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>


 
<script  src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js')}}"></script>
 @stop