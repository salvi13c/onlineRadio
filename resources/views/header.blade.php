
<nav class="navbar navbar-custom navbar-expand-lg navbar-light text-dark sticky-top py-3" id="navbar">
    <!-- Brand -->
    <a class="navbar-brand" href="/"><img src="{{asset('/img/logo_white_large.png')}}" id="logo"/></a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav navbar-center">
        
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stations">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/topcharts">Top charts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">News</a>
        </li>
        @if (session()->has('userUuid'))
        <li class="nav-item">
          <a class="nav-link" href="/news">My stations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/historial">Historial</a>
        </li>
        @endif
        @if (session()->has('userUuid') && session('userLevel')=='admin')
        <li class="nav-item">
          <a class="nav-link" href="/adminpanel">Administration Panel</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        

        
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-1 my-auto">
          <a class="nav-link" id=email_navbar href="/user/profile">
        </li>
        <li class="nav-item mx-1">
          <a class="btn logout-btn btn-primary mb-3" id="logout_button_navbar" onclick="logout()"class="btn btn-primary">Logout</a>
        </li>
        <li class="nav-item mx-1">
          <a class="btn login-btn btn-primary" id="login_button_navbar"  class="btn btn-primary" href="/login">Login</a>
        </li>
        <li class="nav-item  mx-2">
          <a class="btn register-btn btn-primary" id="register_button_navbar" class="btn btn-primary" href="/register">Register</a>
        </li>
      </ul>
    </div>
  </nav>

  