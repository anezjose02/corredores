<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">Corredores</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">Acerca de nosotros</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contacto</a>
              </li>


               <!-- Authentication Links -->
               @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrese') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                          
                            @can('generic-users')
                            <a class="dropdown-item" href="{{ route('perfil.index') }}">
                                Perfil
                            </a>                         
                          @endcan

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            
                      

                            @can('adminonly-users')
                              <a class="dropdown-item" href="{{ route('admin.index') }}">
                                  Tablero de control
                              </a>                         
                            @endcan

                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                   
                            
                        </div>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
      </nav>



