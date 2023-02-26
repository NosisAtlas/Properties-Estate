<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        @if (Route::has('login'))
            
          
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Houses</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        @endif
        @endauth
        
      </ul>
      @endif
    </div>
  </div>
</nav>