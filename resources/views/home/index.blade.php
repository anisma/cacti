@extends('layouts/app')
@section('content')
    <div class="hero-wrapper">
        <div class="banner-wrapper">
            <div class="banner banner1">
                <div class="hero-content wrapper">
                    <div class="content-wrapper">
                        <h1 class="hero-title">Haworthia Batesiana</h1>
                        <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button class="btn hero-btn">shop now</button>
                        <nav>
                            <span class="arrow-left"></span>
                            <span class="arrow-right"></span>
                            <span class="line"></span>
                            <span class="pagination">1/3</span>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="banner banner2">
                <div class="hero-content wrapper">
                    <div class="content-wrapper">
                        <h1 class="hero-title">Haworthia African Pearl</h1>
                        <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button class="btn hero-btn">shop now</button>
                        <nav>
                            <span class="arrow-left"></span>
                            <span class="arrow-right"></span>
                            <span class="line"></span>
                            <span class="pagination">2/3</span>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="banner banner3">
                <div class="hero-content wrapper">
                    <div class="content-wrapper">
                        <h1 class="hero-title">Echeveria Pulidonis</h1>
                        <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button class="btn hero-btn">shop now</button>
                        <nav>
                            <span class="arrow-left"></span>
                            <span class="arrow-right"></span>
                            <span class="line"></span>
                            <span class="pagination">3/3</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="featured wrapper">
        <div class="featured-title">
            <h1>Featured Items</h1>
            <a href="{{ route('shop') }}">
                <span>All Plants</span>
            </a>
        </div>
        <div class="card-list"> 
            @foreach ($featuredItems as $item)
                <div class="card" >
                    <div class="image">
                        <img src="/img/{{ $item->Images[0]->image }}" alt="" >
                        <div class="view-details">
                            <a href="{{ route('shop.show',['product'=>$item->id]) }}">
                                <span class="btn btn-view-details" >View Details</span>
                            </a>
                        </div>
                    </div>
                    <span class="title">{{ $item->name }}</span>
                    <span class="price">Rp {{ $item->price }}</span>
                </div>
            @endforeach

        </div>
    </div>

    <div class="about wrapper">
        
        <div class="about-content">
            <h1>Why Succulents?</h1>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="image">
            <img src="/img/about-us.jpg" class="image">
        </div>
    </div>

    <div class="services wrapper">
        <div class="service-item">
            <img class="logo" src="logo/shipping.svg" alt="">
            <h1>Shipping</h1>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="service-item">
            <img class="logo" src="logo/gurantee.svg" alt="">
            <h1>Gurantee</h1>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="service-item">
            <img class="logo" src="logo/wallet.png" alt="" height="100px" width="100px">
            <h1>Payment</h1>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
        
    <div class="blog-section wrapper">
        <img src="img/cactus.jpg" alt="">
        <div class="blog-content">
            <h1>Choosing the right pot size of your succulentus</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn blog-btn">continue read</button>
        </div>
    </div>
    <div class="contact-us">
        <div class="wrapper">
            <div class="contact-us-content">
                <h1>Contact Us</h1>
                <p>If you have any problems, feel free to fill out this form and we will reply your messages.</p>
                <form class="contact-us-form" action="#">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    


@endsection