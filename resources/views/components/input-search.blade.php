<form action="{{ $url }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="{{ $placeholder }}" value="{{ request()->search }}"
            name="search">
        <span class="input-group-append">
            <button type="button" class="btn btn-dark">
                <i class="fas fa-search"></i>
            </button>
        </span>
    </div>
</form>