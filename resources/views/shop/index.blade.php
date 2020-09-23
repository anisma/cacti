@extends('layouts/app')
@section('content')
    <div class="wrapper shop-page">
        <div class="filter">
            <h4 class="filter-title">Filters</h4>
            <x-filter-group :items="$genera" title="Genus"/>
            <x-filter-group :items="$sizes" title="Size"/>
            <x-filter-group :items="$colors" title="Color"/>
        </div>

        <div class="shop-wrapper">
            <h3 class="shop-title">Plants</h3>
            <div class="shortby">
                <div class="main-shortby">
                    {{-- <select id="short">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="hi-price">Highest Price</option>
                        <option value="lo-price">Lower Price</option>
                    </select> --}}
                </div>
            </div>
            <x-card-list :products="$products"/>
            
           

                {{ $products->links('pagination') }}

        </div>


    </div>
@endsection