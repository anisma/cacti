<div class="card" >
    <div class="image-container">
        <img src="/img/{{ $product->images[0]->image }}" alt="{{ $product->name }}" width="100px" >
        <div class="view-details">
            <a href="{{ route('shop.show',['product' => $product->id]) }}">
                <x-button type="" class="secondary-button" >View Details</x-button>
            </a>
        </div>
    </div>
    <p class="title">{{ $product->name }}</p>
    <p class="price">Rp {{ $product->price }}</p>
</div>
