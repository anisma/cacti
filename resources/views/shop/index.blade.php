@extends('layouts/app')
@section('content')
    <div class="wrapper _shop">
        <div class="fillter-wrapper">
            <h2 class="fillter-title">Fillters</h2>
            <hr>
            <div class="sub-fillter">
                <h3 class="subtitle">Genus</h3>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
            </div>
            <hr>
            <div class="sub-fillter">
                <h3 class="subtitle">Size</h3>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
            </div>
            <hr>
            <div class="sub-fillter">
                <h3 class="subtitle">Color</h3>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
                <div class="fillter-input">
                    <span class="option">Pilihan</span>
                    <input type="checkbox">
                    <span class="check-mark"></span>
                </div>
            </div>
        </div>

        <div class="shop-wrapper">
            <h1 class="shop-title">Shop</h1>
            <div class="shortby">
                <div class="main-shortby">
                    <label for="short-by"></label>
                    <option name="short-by" value="">
                        <span>Featured</span>
                    </option>
                </div>
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


    </div>
@endsection