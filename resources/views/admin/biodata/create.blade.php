@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
<x-card title="Biodata dan History Jabatan">
    <div class="row">
        <div class="col-lg-6">
            <div class="container-fluid">
                <div class="col mb-5 mt-5 ml-5">
                    <div class="card-body">
                        <div class="col">
                            <i class="fa fa-user-circle" style="font-size: 5rem"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <a class="btn btn-sm  btn-warning" href="">Biodata</a>
                                <a class="btn btn-sm  btn-warning" href="">History Jabatan</a>
                            </div>
                        </div>
                        <div class="card-body">
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
</x-card>
@endsection