@extends('layouts.backend.app', ['title' => 'Perhitungan Honor'])

@section('content')
<x-card title="Perhitungan Honor">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="col-lg-9">
                <div class="container-center">
                    <div class="col mb-5 mt-5 ml-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.perhitungan.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-4 col-form-label">Tahun</label>
                                        <div class="col-sm-7">
                                            <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                                <option value="">--Pilih Tahun--</option>
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
                                                <option value="">--Pilih Tribulan Gaji--</option>
                                                <option value="3"> Januari-Maret </option>
                                                <option value="3"> April-Juni </option>
                                                <option value="3"> Juli-September </option>
                                                <option value="3"> Oktober-Desember </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-4 col-form-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="kecamatan">
                                                <option value="">--Pilih Kecamatan--</option>
                                                @foreach ($kecamatans as $kecamatan)
                                                <option class="form-control @error('kecamatan') is-invalid @enderror"
                                                    name="kecamatan" value="{{ $kecamatan->id }}">
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
                                    <div class="mb-2 row">
                                        <label for="" class="col-sm-4 col-form-label">Kelompok Jabatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="jabatan">
                                                <option value="">--Pilih Jabatan--</option>
                                                @foreach ($jabatans as $jabatan)
                                                <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('jabatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="col mb-6">
                                            <button type="submit" class="btn btn-success btn-sm float-left">
                                                Proses
                                            </button>
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
        <div class="col-lg-8">
            <div class="col mb-5 mt-15 ml-15">
                <div class="card ml-5">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-2 row">
                                <label for="" class="col-sm-4 col-form-label">Total</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-md" id="" name="nama" value=""
                                        placeholder="Enter Total">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-4 col-form-label">Total Biaya Tranfer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-md" id="" name="nama" value=""
                                        placeholder="Enter Total Biaya Tranfer">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-4 col-form-label">Total Pajak</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-md" id="" name="nama" value=""
                                        placeholder="Enter Total Pajak">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-4 col-form-label">Total Terima Bersih</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-md" id="" name="nama" value=""
                                        placeholder="Enter Total Terima Bersih">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-11 ml-5">
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
                            <td>Januari-Maret</td>
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