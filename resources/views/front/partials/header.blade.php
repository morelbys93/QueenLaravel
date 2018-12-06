<!-- cabecera -->
<header class="main-header">
<a class="logo" href="{{ url('/') }}"> <img src="images/queen_candy.png" alt="logotipo"> </a>
  <!-- barra de navegacion -->
  <nav class="main-nav">
     <!-- <li><a href="#" class="toggle-nav"><span class="fa fa-bars"></span></a></li>-->
     <!-- @if (Route::has('login'))
         <div class="top-right links">
             @auth
                 <a href="{{ url('/') }}">Home</a>
             @else
                 <a href="{{ route('login') }}">Login</a>

                 @if (Route::has('register'))
                     <a href="{{ route('register') }}">Register</a>
                 @endif
             @endauth
         </div>
     @endif -->
      <div class="menu">
        <ul>
          @guest
          <li><a href="{{ route('register') }}"><i class="fas fa-registered"></i> Registro</a></li>
          <!-- Forma opcional para las rutas {{ route('register') }} -->
          <li><a href="/login"> <i class="fas fa-sign-in-alt"></i> Login</a> </li>
          @else
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          @endguest
            <li><a href="/faqs"><i class="fas fa-question"></i> FAQ</a></li>
        </ul>
      </div>
  </nav>
</header>
