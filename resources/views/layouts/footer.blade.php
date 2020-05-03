<footer id="footer">
    <a href="/"><h1 class="logo-icon">CACTI</h1></a>
    <nav class="main-nav-footer">
        <ul class="main-section">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><span>Home</span></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}"><span>Shop</span></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}"><span>Blog</span></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}"><span>Contact</span></a></li>
        </ul>
    </nav>

    <div class="socials">
        <a href="#">
            <img src="{{ url('/logo/instagram.svg') }}" alt="" >
        </a>
        <a href="#">
            <img src="{{ url('/logo/facebook.svg') }}" alt="" >
        </a>
        <a href="#">
            <img src="{{ url('/logo/twitter.png') }}" alt="" >
        </a>
    </div>

</footer>