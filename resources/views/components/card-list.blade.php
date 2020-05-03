<div class="card-list">
    @foreach ($products as $product)
        <x-card :product="$product"/>
    @endforeach
</div>