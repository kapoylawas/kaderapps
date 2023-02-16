@extends('layouts.backend.app', ['title'=> 'Puskesmas'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.puskesmas.update', $puskesmas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT PUSKESMAS" url="{{ route('admin.puskesmas.index') }}" titleBtn="Update Puskesmas">
                <x-input title="Nama Puskesmas" type="text" name="name" placeholder="Enter nama puskesmas"
                    :value="$puskesmas->name" />
                <x-input title="Alamat" type="text" name="alamat" placeholder="Enter alamat"
                    :value="$puskesmas->alamat" />
                <x-input title="Email" type="email" name="email" placeholder="Enter email" :value="$puskesmas->email" />
                <x-input title="No Telp" type="number" name="notelp" placeholder="Enter no telepon"
                    :value="$puskesmas->tlp" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection