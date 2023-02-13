<div class="modal fade" id="modal-default{{ $id }}">
    <div class="modal-dialog">
        <form action="{{ $url }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-check mr-1"></i> {{ $titleBtn }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>