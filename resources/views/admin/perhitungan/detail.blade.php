@extends('layouts.backend.app', ['title' => 'Detail Honor'])

@section('content')
<x-card title="Detail Honor">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="col-lg-10">
            <div class="container-center">
                <div class="col mb-5 mt-5 ml-5">
                    <div class="mb-10 row">
                    </div>
                    <div class="card-body-center">
                    </div>
                    <div class="card">
                        <div class="ml-10">
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Kelompok Jabatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Tahun</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Bulan Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Bulan Akhir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Nominal Honor</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Pajak</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Biaya Transfer</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Jumlah Terima Bersih</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-2 row float-right">
                                        <a type="submit" href="{{ route('admin.perhitungan.index') }}" class="btn btn-warning btn-sm">
                                            Kembali
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-card>
@endsection