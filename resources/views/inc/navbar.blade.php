<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'RotexSolution') }}
        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @guest
                        @else
                            @if (Auth::user()->role == "admin")
                                <li class="nav-item">
                                    <a href="/admins" class="nav-link">Admin Panel</a>
                                </li>

                                @else
                                    <li class="nav-item">
                                        <a href="/dashboard" class="nav-link">Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('roadtax.show', Auth::user()->ic) }}" class="nav-link">Renew Roadtax</a>
                                    </li>
                            @endif
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif

                        @else
                            @if (Auth::user()->role == "admin")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                </li>

                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profiles.show', Auth::user()->ic) }}">
                                            <span>{{ Auth::user()->username }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                    </li>
                            @endif

                    @endguest
                </ul>
            </div>
    </div>
</nav>
