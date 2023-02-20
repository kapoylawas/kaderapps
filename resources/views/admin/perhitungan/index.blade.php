@extends('layouts.backend.app', ['title' => 'Perhitungan Honor'])

@section('content')
<x-card title="Perhitungan Honor">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="col-lg-9">
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
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Tahun</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Tribulan Gaji</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="Krian">Krian</option>
                                            <option value="Sukodono">Sukodono</option>
                                            <option value="Wonoayu">Wonoayu</option>
                                            <option value="Tarik">Tarik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="" class="col-sm-4 col-form-label">Kelompok Jabatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="Krian">Lurah</option>
                                            <option value="Sukodono">Modin</option>
                                            <option value="Wonoayu">Sekertaris</option>
                                            <option value="Tarik">Bendahara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col mb-6">
                                        <a href="{{ route('admin.perhitungan.create') }}"
                                            class="btn btn-success btn-sm float-left">
                                            Proses
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
    <div class="row">
        <div class="col">
        <div class="container-fluid">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th style="width: 2%">No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Kelompok Jabatan</th>
                    <th>Tahun</th>
                    <th>Tribulan Gaji</th>
                    <th>Kecamatan</th>
                    <th>Jabatan</th>
                    <th>Jumlah Terima Bersih</th>
                    <th style="width: 2%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Asep</td>
                    <td>351514855426</td>
                    <td>Kelurahan</td>
                    <td>2023</td>
                    <td>4.500.000</td>
                    <td>Candi</td>
                    <td>Sekertaris</td>
                    <td>4.000.000</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-1">
                                        <a type="submit" href="{{ route('admin.perhitungan.create') }}"
                                            class="btn btn-sm btn-primary ms-auto" value="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</x-card>
@endsection