<!-- https://jsfiddle.net/Nagasai_Aytha/k1nz4L3h/6/ -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-light-custom">
  <div class="container">
    <a class="navbar-brand" href="{{ route('homepage') }}">
      <img src="{{ asset('images/das_logo.jpg') }}" class="img-custom" title="DAS" alt="DAS" />
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
          <span class="sr-only">Toggle navigation</span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('map') }}">Map</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('office') }}">Office</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('vue') }}">Vue.JS</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('teamVueJs') }}">Team.vue.js</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Multimedia
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="portfolio-1-col.html">Photos</a>
            <a class="dropdown-item" href="portfolio-2-col.html">Vidéos</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>