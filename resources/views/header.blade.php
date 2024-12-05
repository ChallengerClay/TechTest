<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      @if(!Auth::user())
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('login')}}">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('signup')}}">Registrarse</a>
        </li>
      </ul>
      @else
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('pizzas')}}">Administrar pizzas</a>
          </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('logout')}}">Cerrar sesión</a>
        </li>
      </ul>
      @endif

    </div>
</nav>