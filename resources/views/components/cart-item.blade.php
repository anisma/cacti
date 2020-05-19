<div class="cart-item">
    @foreach ($ as $item)
        {{ $item['images']}}
        
        {{-- <img src="/img/{{ $product['images'][0]['image'] }}" alt="{{ $product['name'] }}">
        <h4>{{ $product['name']}}</h4>
        <p>{{ $product['price'] }}</p>
        <x-small-button class="minus"/>
        <span>{{ $product['quantity'] }}</span>
        <x-small-button class="plus"/>
        <button class="button">Checkout</button> --}}
    @endforeach
</div>