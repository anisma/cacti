@extends('layouts/app')
@section('content')
    <div class="hero-wrapper">
        <div class="hero-content wrapper">
            <h1 class="hero-title">Haworthia Batesiana</h1>
            <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn hero-btn">shop now</button>
            <nav>
                <span class="arrow left"></span>
                <span class="arrow right"></span>
                <span class="line"></span>
                <span class="pagination">1/3</span>
            </nav>
        </div>
        
    </div>
    <div class="featured wrapper">
        <div class="featured-title">
            <h1>Featured Items</h1>
            <a href="#">
                <span>All Plants</span>
            </a>
        </div>
        <div class="card-list">
            <div class="card" >
                <div class="image">
                    <img src="img/cactus.jpg" alt="" >
                    <div class="view-details" id="view-details0">
                        <span class="btn btn-view-details" >View Details</span>
                    </div>
                </div>
                <span class="title">Cactus</span>
                <span class="price">Rp 50.000</span>
            </div>

            <div class="card" id="card">
                <div class="image">
                    <img src="img/cactus.jpg" alt="" >
                    <div class="view-details" id="view-details1">
                        <span class="btn btn-view-details" >View Details</span>
                    </div>
                </div>
                
                <span class="title">Cactus</span>
                <span class="price">Rp 50.000</span>
            </div>

            <div class="card">
                <div class="image">
                    <img src="img/cactus.jpg" alt="" >
                    <div class="view-details" id="view-details2">
                        <span class="btn btn-view-details" >View Details</span>
                    </div>
                </div>ccs
                <span class="title">Cactus</span>
                <span class="price">Rp 50.000</span>
            </div>
        </div>
    </div>

    <div class="about wrapper">
        
        <div class="about-content">
            <h1>Why Succulents?</h1>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
        
    <div class="blog wrapper">
        <img src="img/cactus.jpg" alt="">
        <div class="blog-content">
            <h1>Choosing the right pot size of your succulentus</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn blog-btn">continue read</button>
        </div>
    </div>

    <div class="contact-us wrapper">
        <div class="contact-us-content">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <form action="#">
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="5"></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>


@endsection