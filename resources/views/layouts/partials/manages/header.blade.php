<nav class="navbar navbar-expand-md fixed-top bg-white navbar-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="d-none d-lg-block d-xl-block">{{ config('app.name', 'Laravel') }}</span><span class="d-block d-lg-none d-xl-none">NEILS</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ Request::is('manages') ? 'active text-danger' : '' }}">
                <a class="nav-link" href="{{ route('manages.index') }}">Dashboard</a>
              </li>
              <li class="nav-item {{ Request::is('participants') ? 'active text-danger' : '' }}">
                <a class="nav-link" href="{{ route('manages.participants') }}" class="">Participants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('manages/payments') ? 'text-danger' : '' }}" href="{{ route('manages.payments') }}">Payments</a>
              </li>
              <li class="nav-item {{ Request::is('registered') ? 'active text-danger' : '' }}">
                <a class="nav-link" href="{{ route('manages.registered') }}" class="">(Unpaid)Registered</a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @role('admin|superadmin')
                            <a class="dropdown-item" href="{{ route('manages.index') }}">
                                {{ __('Manages') }}
                            </a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
