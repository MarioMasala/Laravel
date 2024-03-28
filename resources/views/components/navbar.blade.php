<nav class="navbar navbar-expand-lg bg-navbar fixed-top">
    <div class="container-fluid text-center fw-bold font-second">
      <a class="navbar-brand " href="{{ route('homepage') }}">SERIE TV!</a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class=" container-fluid collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 font-second">
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
        
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Le Nostre Serie Tv
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('movie.create')}}">Inserisci Una Serie Tv</a></li>
              <li><a class="dropdown-item" href="{{route('movie.index')}}">Tutte Le Serie Tv</a></li>
              <li><hr class="dropdown-divider"></li>
              <li></li>
            </ul>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Le Nostre Categorie
              </a>
              <ul class="dropdown-menu">
                
                <li><a class="dropdown-item" href="{{route('category.index')}}">Tutte Le Categorie</a>
                </li>
                <li><a class="dropdown-item" href="{{route('category.create')}}">Crea Una Categorie</a>
                </li>
                
               
          </ul>
       </li>
          @guest
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Area Riservata
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                <li><hr class="dropdown-divider"></li>
                <li></li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto {{ Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu">
                    
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a>
                    </li>
                    <form action="{{route('logout')}}" method="POST" id="logout">@csrf</form>
                    <li><a class="dropdown-item" href="{{route('profile')}}">Area Utente</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li></li>
                   
              </ul>
           </li>
           @endauth
      </div>
    </div>
  </nav>