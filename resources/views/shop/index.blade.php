@extends('layouts/app')
@section('content')
    <div class="wrapper shop-page">
        <div class="filter-btn">Filter</div>
        <div class="filter">
            <h4 class="filter-title">Filters</h4>
            <x-filter-group :items="$genera" title="Genus"/>
            <x-filter-group :items="$sizes" title="Size"/>
            <x-filter-group :items="$colors" title="Color"/>
            <div class="filter-option-btn">
                <li><a class="button option-btn" href="#">Filter</a></li>
                <li><a class="button option-btn" href="#">Close</a></li>
            </div>
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

@section('script')
    <script type="text/javascript">

    if(window.innerWidth <= 540) {
        
        const filterBtn = document.querySelector('.filter-btn');
        const filterWindow = document.querySelector('.filter');
        const buttons = document.querySelectorAll('.option-btn');

        let showMenu = false;

        filterBtn.addEventListener('click', toggleMenu);
        buttons.forEach((item) => item.addEventListener('click', toggleMenu));

        function toggleMenu() {
            if (!showMenu) {
                filterBtn.classList.add('open');
                filterWindow.classList.add('open');
                showMenu = true;
            } else {
                filterBtn.classList.remove('open');
                filterWindow.classList.remove('open');
                showMenu = false;
            }
        }
    }

    </script>
@stop