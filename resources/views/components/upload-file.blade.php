<div class="form-group">
    <label for="customFile">{{ $title }}</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input @error($name) is-invalid @enderror" id="customFile"
            name="{{ $name }}" value="{{ $value }}">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>