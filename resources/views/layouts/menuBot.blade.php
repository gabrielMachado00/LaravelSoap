
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">M</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                           <a class="nav-link" href="{{ url('Login') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('Sobre') }}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('ProcureLoja') }}">Redes Credenciadas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/CuideSe') }}">Blog-Cuide-se</a>
            </li>

              <li class="nav-item">
              <a class="nav-link" href="{{ url('/Cadastro/Adesao') }}">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
