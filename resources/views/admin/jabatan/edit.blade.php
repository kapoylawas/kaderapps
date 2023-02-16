@extends('layouts.backend.app', ['title' => 'Jabatan'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.jabatan.update', $jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT JABATAN" url="{{ route('admin.jabatan.index') }}" titleBtn="Update Jabatan">
                <x-input title="Nama" type="text" name="name" placeholder="Enter jabatan title"
                    :value="$jabatan->name" />
                <x-input title="Kelmpok kelompokjabatan" type="text" name="kelompokjabatan" placeholder="Enter Kelompok Jabatan"
                    :value="$jabatan->kelompokjabatan" />
                <x-input title="Tarif Gaji" type="text" name="tarifgaji" placeholder="Enter Tarif Gaji"
                    :value="$jabatan->tarifgaji" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection