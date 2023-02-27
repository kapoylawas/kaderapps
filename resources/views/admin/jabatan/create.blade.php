@extends('layouts.backend.app', ['title' => 'Jabatan'])

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.jabatan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-card-form title="CREATE NEW JABATAN" url="{{ route('admin.jabatan.index') }}" titleBtn="Create Jabatan">
                <x-input title="Nama Jabatan" type="text" name="name" placeholder="Enter jabatan"
                    :value="old('name')" />
                <x-input title="Kelompok Jabatan" type="text" name="kelompokjabatan"
                    placeholder="Enter Kelompok Jabatan" :value="old('kelompokjabatan')" />
                <x-input title="Tarif Gaji" type="text" name="tarifgaji" placeholder="Enter Tarif Gaji"
                    :value="old('tarifgaji')" />

            </x-card-form>
        </form>
    </div>
</div>

@endsection