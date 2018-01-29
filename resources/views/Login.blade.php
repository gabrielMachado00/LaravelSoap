<!DOCTYPE html>
<html lang="en">

<head>
        @include('layouts.Login')
</head>

<body>
@Include('layouts.menuBot')
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
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


</body>




</html>