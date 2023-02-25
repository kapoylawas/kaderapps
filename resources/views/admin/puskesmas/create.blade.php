@extends('layouts.backend.app', ['title'=> 'Puskesmas'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.puskesmas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-card-form title="CREATE NEW PUSKESMAS" url="{{ route('admin.puskesmas.index') }}"
                titleBtn="Create Puskesmas">
                <x-input title="Nama Puskesmas" type="text" name="name" placeholder="Enter nama puskesmas"
                    :value="old('name')" />
                <x-input title="Alamat" type="text" name="alamat" placeholder="Enter alamat" :value="old('alamat')" />
                <x-input title="Email" type="email" name="email" placeholder="Enter email" :value="old('email')" />
                <x-input title="No Telp" type="number" name="tlp" placeholder="Enter no telepon"
                    :value="old('notelp')" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection