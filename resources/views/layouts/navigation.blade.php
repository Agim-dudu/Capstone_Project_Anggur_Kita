<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Anggur Kita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item" id="shop"><a href="{{ route('shop') }}" class="nav-link {{ request()->is('shop') ? 'active' : '' }}">Shop</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Profile</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{route('profile.edit')}}">Akun</a>
                        <a class="dropdown-item" href="{{route('dashboard')}}">Dahboard Admin</a>
                        <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                        <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                    </div>
                </li>
                <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span
                            class="icon-shopping_cart"></span>{{ count((array) session('cart')) }}</a></li>
                @if(Auth::check('verified'))
                <li class="nav-item cta cta-colored"><a href="{{route('logout')}}" class="nav-link"
                    style="font-weight: bold; background-color:#ca3a1d;"><span></span>Log Out</a></li>
                @else
                <li class="nav-item cta cta-colored"><a href="{{route('login')}}" class="nav-link"
                    style="font-weight: bold; background-color:#28a745;"><span></span>Sign in</a></li>
                @endif
        

            </ul>
        </div>
    </div>
</nav>
