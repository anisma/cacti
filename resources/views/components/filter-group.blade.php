<div class="filter-group">
    <h5 class="title">{{ $title }}</h5>
    @foreach ($items as $item)
        <x-checkbox :name="$item->name" :label="$item->name" :value="$item->id"/>
    @endforeach
</div>