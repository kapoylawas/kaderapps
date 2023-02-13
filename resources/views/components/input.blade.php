<div class="form-group">
    <label>{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}" value="{{ $value }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>