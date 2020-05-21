@extends('layouts/app')
@push('scripts')
    <script src="{{ asset('js/shop/shop.js') }}"></script>
@endpush
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
            <div class="sortby">
                <div class="main-sortby">
                    <select id="sort">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="hi-price">Highest Price</option>
                        <option value="lo-price">Lower Price</option>
                    </select>
                </div>
            </div>
            <x-card-list :products="$products"/>
            
            {{ $products->links('pagination') }}

        </div>


    </div>
@endsection