@extends('layouts/app')
@section('content')
    <div class="product-preview wrapper">
        <div class="images">
            <div class="main-image">
                <img src="/img/{{ $product->images[0]->image }}" alt="">
            </div>
            <div class="image-index">
                @foreach ($product->images as $image)
                    <img src="/img/{{ $image->image }}" alt="">
                @endforeach
               
            </div>
        </div>
        <div class="preview-content">
            <h1 class="title">{{ $product->name }}</h1>
            <hr>
            <span class="price">Rp {{ $product->price }}</span>
            <span class="subtitle">Size</span>
            <div class="size-wrapper">
                <input type="radio" name="size" id="size1" value="2 inch">
                <label for="size1">2 inch</label>
                <input type="radio" name="size" id="size2" value="4 inch">
                <label for="size1">4 inch</label>
                <input type="radio" name="size" id="size3" value="6 inch">
                <label for="size1">6 inch</label>
                
            </div>
            <span class="subtitle">Qty</span>
            <div class="qty-wrapper">
                <button class="btn-secondary" id="minus-btn">-</button>
                <span class="qty">1</span>
                <button class="btn-secondary" id="plus-btn">+</button>
                <button class="btn">add to cart</button>
            </div>
            <div class="description-wrapper">
                <div class="option-wrapper">
                    <span class="option selected"id="description">description</span>
                    <span class="option "id="shipping">shipping</span>
                    <span class="option "id="gurantee">gurantee</span>
                    <span class="option "id="care">care</span>
                </div>
                <div class="content">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="featured wrapper">
        <div class="featured-title">
            <h1>Related Items</h1>
            <a href="{{ route('shop') }}">
                <span>All Plants</span>
            </a>
        </div>
        <div class="card-list">
            @foreach ($relatedItems as $item)
              
                <div class="card" >
                    <div class="image">
                        <img src="/img/{{ $item->images[0]->image }}" alt="" >
                        <div class="view-details" id="view-details0">
                            <a href="{{ route('shop.show',['product' => $item->id]) }}">
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
@endsection
