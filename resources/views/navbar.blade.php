<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-end" style="height: 80px;">

    <!-- Links -->
    <ul class="navbar-nav">
        @guest
        <li><a href="{{ route('welcome') }}"><span style="color:white;"><b> Inicio</b></span></a></li>
        <li><a href="{{ route('login') }}"><span style="color:white; margin-left:15px;" ><b> Ingresar</b></span></a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}"><span style="color:white; margin-left:15px;"><b> Registrar</b></span></a></li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="glyphicon glyphicon-user"><b> {{ Auth::user()->name }}</b>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-log-out"> {{ __('Salir') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </ul>
  </nav> 