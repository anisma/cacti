<div class="form-group">
   
        <input id="{{ $name }}" type="{{ $type }}" class="form-input @error($name)invalid @enderror" name="{{ $name }}" value="{{ $value ? $value : old($name) }}" placeholder="{{ $label }}" autocomplete="off">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    
    @error($name)
        <span class="error-message">
        <strong> {{$message}} </strong>
        </span>
    @enderror
    
</div>