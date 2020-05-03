<header id="site-header">
    <div class="wrapper">
        <a href="/"><h1 class="logo-icon">CACTI</h1></a>
        <div id="burger-menu"></div>
        <nav > 
            <ul class="header-middle-area">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><span>Home</span></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}"><span>Shop</span></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}"><span>Blog</span></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}"><span>Contact</span></a></li>
            </ul>
            <ul class="header-right-area">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <img src="/logo/shopping-cart.png" alt="">
                        <span>Cart</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <img src="/logo/customer.png" alt="">
                        <span>My Account</span>
                    </a>
                </li>
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav>
    </div>
</header>