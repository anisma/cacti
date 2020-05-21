@extends('layouts/app')
@push('scripts')
    <script src="{{ asset('js/banner.js') }}"></script>
@endpush
@section('content')
    <div id="hero">
        <div class="banner-wrapper">

            <x-banner image="/img/banner3.jpg" title="Echeveria Pulidonis" index="4" total="4" id="last-banner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
            <x-banner image="/img/banner1.jpg" title="Haworthia Batesiana" index="1" total="4" id="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
            <x-banner image="/img/banner2.jpg" title="Haworthia African Pearl" index="2" total="4" id="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
            <x-banner image="/img/blog1.jpg" title="Aloe Vera" index="3" total="4" id="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
            <x-banner image="/img/banner3.jpg" title="Echeveria Pulidonis" index="4" total="4" id="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
            <x-banner image="/img/banner1.jpg" title="Haworthia Batesiana" index="1" total="4" id="first-banner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-banner>
        </div>
    </div>

    <main class="main-content wrapper">

        <section id="featured">
            <div class="header">
                <h3>Fatured Items</h3>
                <a class="button-link" href="{{ route('shop') }}">All Plants</a>
            </div>
            <x-card-list :products="$featuredItems"/>
        </section>

        <section id="about-us">
            <div>
                <h2>Why succulents?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <img src="/img/about-us.jpg" class="image">
        </section>

        <section id="point-of-sale">
            <ul>
                <li><img class="logo" src="/logo/shipping.svg" alt=""></li>
                <li><h3>Shipping</h3></li>
                <li>
                    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </li>
            </ul>
            <ul>
                <li><img class="logo" src="/logo/gurantee.svg" alt=""></li>
                <li><h3>Gurantee</h3></li>
                <li>
                    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </li>
            </ul>
            <ul>
                <li><img class="logo" src="/logo/wallet.png" alt=""></li>
                <li><h3>Payment</h3></li>
                <li>
                    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </li>
            </ul>
        </section>

        <section id="article">
            <img src="/img/image9.jpg" alt="">
            <ul>
                <li>
                    <h3>Choosing the right pot size of your succulentus</h3>
                </li>
                <li>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </li>
                <li><a class="button" href="">continue read</a></li>
            </ul>
        </section>
    </main>

    <section id="contact-us">
        <div class="wrapper">
            <div class="contact-us-content">
                <h2>Contact Us</h2>
                <p>If you have any problems, feel free to fill out this form and we will reply your messages.</p>
                <form class="contact-us-form" action="#">
                    <x-input type="text" name="name" value="" label="Name"/>
                    <x-input type="email" name="email" value="" label="Email"/>
                    <div class="form-group">
                        <textarea class="form-input @error('message')invalid @enderror" name="message" value="{{ old('message') }} id="message" cols="30" rows="5" placeholder="Message"></textarea>
                        <label for="message" class="form-label">Message</label>
                        @error('message')
                            <span class="error-message">
                            <strong> {{$message}} </strong>
                            </span>
                        @enderror

                    </div>
                    <button type="submit" class="button">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@endsection
