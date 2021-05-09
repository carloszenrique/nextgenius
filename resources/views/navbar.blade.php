<div style="color:white;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header"></div>
            <ul class="nav navbar-nav navbar-right list-group list-group-horizontal">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"><b> Ingresar</b></span></a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"><b> Registrar</b></span></a></li>
                    @endif
                @else
                    <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"><b> Inicio</b></span></a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="glyphicon glyphicon-user"><b> {{ Auth::user()->name }}</b>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"> {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>