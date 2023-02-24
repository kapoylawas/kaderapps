@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.kota.update', $kota->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT KOTA" url="{{ route('admin.kota.index') }}" titleBtn="Update Kota">
                <x-input title="Nama Kota" type="text" name="name" placeholder="Enter Kota" :value="$kota->name" />
            </x-card-form>
        </form>
    </div>
</div>
@endsection