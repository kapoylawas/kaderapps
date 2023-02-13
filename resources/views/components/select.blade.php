<div class="form-group">
    <label>{{ $title }}</label>
    <select class="form-control @error($name) is-invalid @enderror" name="{{ $name }}">
        {{ $slot }}
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>