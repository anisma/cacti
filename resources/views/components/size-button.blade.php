<div class="size-button-wrapper">
    @foreach ($options as $option)
        <span {{ $attributes->merge(['class' => 'size-button']) }}>{{ $option->name }}</span>  
    @endforeach
</div> 

