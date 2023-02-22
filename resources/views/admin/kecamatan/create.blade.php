@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.kecamatan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-card-form title="CREATE NEW KECAMATAN" url="{{ route('admin.kecamatan.index') }}"
                titleBtn="Create Kecamatan">
                <x-input title="Nama Kecamatan" type="text" name="name" placeholder="Enter Kecamatan"
                    :value="old('name')" />
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kota">
                            <option value="">--Pilih Kota--</option>
                            @foreach ($kotas as $kota)
                            <option class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan"
                                value="{{ $kota->id }}">
                                {{ $kota->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('kecamatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </x-card-form>
        </form>
    </div>
</div>
@endsection