<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <div class="card-footer">
        <a href="{{ $url }}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i> Go Back
        </a>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-check mr-1"></i> {{ $titleBtn }}
        </button>
    </div>
</div>