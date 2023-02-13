<a href="#" onclick="deleteData({{ $id }})" class="btn btn-danger btn-sm">
    <i class="fas fa-trash"></i>
    Delete
</a>
<form id="delete-form-{{ $id }}" action="{{ $url }}" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>