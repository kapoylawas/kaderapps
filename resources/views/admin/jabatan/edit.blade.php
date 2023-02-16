@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')
<x-card title="Data Jabatan">
    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="card mt-5 ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{ route('admin.jabatan.update', $jabatan->id) }}" method="PUT">
                                @csrf
                                <x-input title="Nama Jabatan" type='text' name="name" value="{{ $jabatan->name }}"
                                    placeholder="{{ $jabatan->name }}">
                                </x-input>
                                <x-input title="Kelompok Jabatan" type='number' name="kelompok"
                                    value="{{ $jabatan->kelompokjabatan }}"
                                    placeholder="{{ $jabatan->kelompokjabatan }}">
                                </x-input>
                                <x-input title="Nominal Gaji" type='number' name="gaji"
                                    value="{{ $jabatan->tarifgaji }}" placeholder="{{ $jabatan->tarifhaji }}">
                                </x-input>

                                <div class="mb-3 mt-5 row float-right">
                                    <a href="{{ route('admin.jabatan.index') }}" class="btn btn-warning btn-sm">
                                        Kembali
                                    </a>
                                    <a href="{{ route('admin.jabatan.index') }}" class="btn btn-danger btn-sm ml-3">
                                        Batal
                                    </a>
                                    <button type="submit" class="btn btn-success btn-sm ml-3">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-card>
@endsection