@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.kelurahan.update', $kelurahan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT KELURAHAN" url="{{ route('admin.kelurahan.index') }}" titleBtn="Update Kelurahan">
                <x-input title="Nama" type="text" name="name" placeholder="Enter bank" :value="$kelurahan->name" />
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kecamatan">
                            <option value="">--Pilih Kecamatan--</option>
                            @foreach ($kecamatans as $kecamatan)
                            <option class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan"
                                value="{{ $kecamatan->id }}">
                                {{ $kecamatan->name }}
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