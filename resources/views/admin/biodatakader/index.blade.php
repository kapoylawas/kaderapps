@extends('layouts.backend.app', ['title' => 'Biodata Kader'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="Biodata Kader">
                <div class="mt-2">
                <div class="col-12">
                    <x-input-search placeholder="Search biodata.." :url="route('admin.biodatakader.index')" />
                </div>
                <div class="row">
                    <div class="col-lg-11">
                    <div class="container-fluid">
                        <div class="col mb-6 mt-6 ml-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
                </div>
                </div>
                </div>
                </div>
            </x-card>
        </div>
        <div class="col mb-5">
            <a href="{{ route('admin.biodatakader.create') }}"
            class="btn btn-success btn-sm center">
            <span><i class="fa fa-plus"></i></span>
            Tambah
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-lg-6">
                    <div class="container-fluid">
                    <div class="col mb-4 mt-4 ml-4">
                <div class="card-body">
                    <div class="col">
                        <i class="fa fa-user-circle" style="font-size: 15rem"></i>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="nama"
                                value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="nik"
                                value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">No Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bank</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Upload Buku Tabungan</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-md" id="" name="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row float-right">
                        <a type="submit" href="" class="btn btn-warning btn-sm">
                            Kembali
                        </a>
                        <a href="" class="btn btn-danger btn-sm ml-1">
                            Batal
                        </a>
                        <a href="" class="btn btn-success btn-sm ml-1">
                            Simpan
                        </a>
                    </div>
                </form>
                    </div>
                    </div>
            </div>
        </div>
        </div>        
    </div>
@endsection