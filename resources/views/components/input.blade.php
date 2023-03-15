{{-- <div class="form-group">
    <label for="" class="col-sm-4 col-form-label">{{ $title }}</label>
    <div class="col-sm-10">
        <input class="form-control form-control-md " id="" value="">

        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div> --}}
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">{{ $title }}</label>
    <div class="col-sm-10">
        <input type="{{ $type }}" name="{{ $name }}"
            class="form-control form-control-md @error($name) is-invalid @enderror" id=""
            placeholder="{{ $placeholder }}" value="{{ $value }}" required>
        @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>