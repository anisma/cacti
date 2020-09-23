@extends('layouts/app')
@section('content')
    <div id="hero">
        <div class="banner-wrapper">

            <x-banner image="/img/banner3.jpg" title="Echeveria Pulidonis" index="3" total="3" id="last-banner">Echeveria succulents would make a great addition to any decor. Not only do succulents add a bit of tropical greenery to their surrondings, they are also quite sustainable and easy to keep alive.</x-banner>
            <x-banner image="/img/banner1.jpg" title="Haworthia Batesiana" index="1" total="3" id="">Haworthia batesiana has miniature 2 in rosettes with translucnet bright green leaves marked with a net of deeper geren. These succulent leaves have smooth margins anf a terminal white spine. Rosettes offset freely to form dense clumps.</x-banner>
            <x-banner image="/img/banner2.jpg" title="Haworthia African Pearl" index="2" total="3" id="">Haworthia Reinwardtii, so-called "African Pearls", is one of the most striking Haworthia with narrow pointy leaves marked with bumpy, raised white spotty bands.</x-banner>
            <x-banner image="/img/banner3.jpg" title="Echeveria Pulidonis" index="3" total="3" id="">Echeveria succulents would make a great addition to any decor. Not only do succulents add a bit of tropical greenery to their surrondings, they are also quite sustainable and easy to keep alive.</x-banner>
            <x-banner image="/img/banner1.jpg" title="Haworthia Batesiana" index="1" total="3" id="first-banner">Haworthia batesiana has miniature 2 in rosettes with translucnet bright green leaves marked with a net of deeper geren. These succulent leaves have smooth margins anf a terminal white spine. Rosettes offset freely to form dense clumps.</x-banner>
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
                <p>Succulents are hardy plants by nature. they can withstand most of the harshest environmental conditions like small amounts of water and extreme temperatures; the two factors that will make most houseplants to give it up. As long as you have the basics nailde down (potting mix, sunlight duration, and watering frequency), you can nurture your succulents from any corner of the world - and still have a beautiful plant.</p>
                <p>Succulents appeal on multiple fronts making it a rare jewel. with these plants, you get natural decorations in different shapes, size, and colors - all unique to each otf the numerous types. What's even more interesting is that you can vary the colors of a good number of succulents by controlling elements such as water and sunlight.</p>
            </div>
            <img src="/img/about-us.jpg" class="image">
        </section>

        <section id="point-of-sale">
            <ul>
                <li><img class="logo" src="/logo/shipping.svg" alt=""></li>
                <li><h3>Shipping</h3></li>
                <li>
                    <p class="about-text">Plant orders are shipped within 3-5days depending on avaliability of the plant. We ship our plants Monday through Friday, all tweleve months of the year!</p>
                </li>
            </ul>
            <ul>
                <li><img class="logo" src="/logo/gurantee.svg" alt=""></li>
                <li><h3>Gurantee</h3></li>
                <li>
                    <p class="about-text">We only ship out beautiful, healthy plants! Please track yout package and open it immedieately upon arrival. If you receive your package and are not satisfied, please message us immediately.</p>
                </li>
            </ul>
            <ul>
                <li><img class="logo" src="/logo/wallet.png" alt=""></li>
                <li><h3>Payment</h3></li>
                <li>
                    <p class="about-text">You can easily and wuickly pay with credit card Visa or Mastercard. We pack our products by hand and take great care to ensure that they arrive at their final destination safely.</p>
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
                    <p>Choosing the rigth size plant pot for your succulent can be a dificult task, it can be even more challenging when you are new to succulent care. A container that is too small or to big can have a direct impact on your plant health. Therefore, you need to understand how a pot size affects your succulent growth.</p>
                </li>
                <li><a class="button" href="#">continue read</a></li>
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
