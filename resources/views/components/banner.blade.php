<div class="banner" id="{{ $id }}">
    <img class="image" src="{{ $image }}" alt="" >
    <div class="wrapper">
        <div class="content-wrapper">
            <h1 class="hero-title">{{ $title }}</h1>
            <p class="hero-text">{{ $slot }}</p>
            <a href="{{ route('shop') }}" class="button"><span>shop now</span></a>
            <x-banner-nav :index="$index" :total="$total"/>
        </div>
    </div>
</div>
