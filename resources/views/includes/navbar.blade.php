<nav class="navbar">
    <a class="navbar-brand" href="{{ url('/') }}">
        <div class="logo-image">
            <img src="/images/logo.jpg">
        </div>
    </a>
    <div id="navbarSupportedContent">
        <ul class="nav-menu">
            <!-- Authentication Links -->
            @auth

            @endauth
            @guest
                @if (Request::is('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            @endguest
            @auth
                <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link" href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/students" class="navbar-link">Students</a>
                </li>
                <li class="nav-item">
                    <a href="/notes" class="navbar-link">Notes</a>
                </li>
                <li class="nav-item">
                    <a href="/uploads" class="navbar-link">Upload Evidence</a>
                </li>
                <li class="nav-item">
                    <a href="/cohorts" class="navbar-link">Cohort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} New User</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </ul>
    </div>
</nav>
