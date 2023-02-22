@extends('layouts.backend.app', ['title'=> 'Bank'])

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <form action="{{ route('admin.kecamatan.update', $kecamatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-card-form title="EDIT KECAMATAN" url="{{ route('admin.kecamatan.index') }}" titleBtn="Update kecamatan">
                <x-input title="Nama kecamatan" type="text" name="name" placeholder="Enter kecamatan"
                    :value="$kecamatan->name" />
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