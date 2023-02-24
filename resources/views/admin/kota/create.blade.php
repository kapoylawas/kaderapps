@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.kota.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-card-form title="CREATE NEW KOTA" url="{{ route('admin.kota.index') }}" titleBtn="Create Kota">
                <x-input title="Nama Kota" type="text" name="name" placeholder="Enter Kota" :value="old('name')" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection