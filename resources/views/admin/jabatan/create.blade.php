@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')
<x-card title="Data Jabatan">
    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="card mt-5 ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{ route('admin.jabatan.store') }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Nama Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name"
                                            class="form-control form-control-md @error('name') is-invalid @enderror"
                                            id="" value="">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Kelompok Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kelompok"
                                            class="form-control form-control-md @error('kelompok') is-invalid @enderror"
                                            id="" value="">
                                        @error('kelompok')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Nominal Gaji</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="gaji"
                                            class="form-control form-control-md @error('gaji') is-invalid @enderror"
                                            id="" value="">
                                        @error('gaji')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
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