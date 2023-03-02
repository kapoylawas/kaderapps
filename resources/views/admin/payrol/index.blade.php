@extends('layouts.backend.app', ['title' => 'Payrol'])

@section('content')
<x-card title="Payrol">
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
                                            <option value="">--Pilih Tahun--</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Bulan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="">--Pilih Bulan--</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
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
                                <div class="mb-4 row">
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
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Puskesmas</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="puskesmas">
                                            <option value="">--Pilih Puskesmas--</option>
                                            @foreach ($puskesmas as $puskesmas)
                                            <option value="{{ $puskesmas->id }}">{{ $puskesmas->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('puskesmas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col mb-6">
                                        <a href="{{ route('admin.payrol.create') }}"
                                            class="btn btn-success btn-sm float-left">
                                            Tampilkan Kader
                                        </a>
                                    </div>
                                    <div class="col mb-6">
                                        <a href="{{ route('admin.ppkbd.create') }}"
                                            class="btn btn-success btn-sm float-right">
                                            Tampilkan PPKBD
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