<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">@yield('title')
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <!--
              <li class="nav-item">
                <a href="/" class="nav-link" href="#">Nyitólap</a>
              </li>
              <li class="nav-item">
                <a href="/topics" class="nav-link" href="#">Feladat témakörök</a>
              </li>
              <li class="nav-item">
                <a href="/test" class="nav-link" href="#">Tesztkérdések
                </a>
              </li>
            -->

          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Belépés</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Regisztáció</a>
                  </li>
                  <li class="nav-item">
                    <a href="/topics" class="nav-link" href="#">Feladat témakörök</a>
                  </li>
              @endif
          @else
              <li class="nav-item">
                <a href="/topics" class="nav-link" href="#">Feladat témakörök</a>
              </li>
              <li class="nav-item">
                <a href="/test" class="nav-link" href="#">Tesztkérdések
                </a>
              </li>
              <li class="nav-item">
                <a href="/usertests" class="nav-link" href="#">Megoldott Tesztek
                </a>
              </li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="fas fa-user"></i> &nbsp;&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;</i>{{ __('Kijelentkezés') }}
                      </a>

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
