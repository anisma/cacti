<div {{ $attributes->merge(['class' => 'checkbox']) }}>
    <input name="{{ $name }}" id="{{ $name }}" type="checkbox" {{ old($name) ? 'checked' : '' }} value="{{ $value }}">
    <span class="check-mark"></span>
    <label for="{{ $name }}">{{ $label }}</label>
</div>
