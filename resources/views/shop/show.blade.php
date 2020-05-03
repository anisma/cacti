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
            <h2 class="title">{{ $product->name }}</h2>
            <hr>
            <span class="price">Rp {{ $product->price }}</span>
            <span class="subtitle">Size</span>
            <x-size-button :options="$sizes"/>
            <span class="subtitle">Qty</span>
            <div class="qty-wrapper">
                <x-small-button class="minus"/>
                <span class="qty">1</span>
                <x-small-button class="plus"/>
                <span class="button">add to cart</span>
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
        <div class="header">
            <h3>Fatured Items</h3>
            <a class="button-link" href="{{ route('shop') }}">All Plants</a>
        </div>
        <x-card-list :products="$relatedItems"/>
    </div>
@endsection
