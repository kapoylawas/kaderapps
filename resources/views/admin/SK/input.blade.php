@extends('layouts.backend.app', ['title' => 'Data SK'])

@section('content')
<x-card title="Input Data SK">
    <div class="row">
        <div class="col">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="col mb-1 mt-3 ml-6">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.sk.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-md" id="tahun"
                                                    name="tahun" value="{{ date('Y') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Kelompok Jabatan</label>
                                            <div class="col-sm-6">
                                                <select class="form-control form-control-md" name="jabatan"
                                                    id="jabatan">
                                                    <option value="">--Pilih Jabatan--</option>
                                                    @foreach ($jabatans as $jabatan)
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-6">
                                                <select class="form-control form-control-md" name="kecamatan"
                                                    id="kecamatan">
                                                    <option value="">--Pilih Kecamatan--</option>
                                                    @foreach ($kecamatans as $kecamatan)
                                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                                            <div class="col-sm-6">
                                                <select class="form-control form-control-md" name="kelurahan"
                                                    id="kelurahan">
                                                    <option value="">--Pilih Kelurahan--</option>
                                                    @foreach ($kelurahans as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}">{{ $kelurahan->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">No SK</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-md" id="sk"
                                                    name="sk" value="">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal SK</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control form-control-md" id="tgl"
                                                    name="tgl" value="">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Upload File SK</label>
                                            <div class="col-sm-6">
                                                <input type="file" class="form-control form-control-md" id="filesk" `
                                                    name="filesk" value="">
                                            </div>
                                        </div>

                                        <div class="card-body lg-8">
                                            <div class="row">
                                                <div class="col-3">
                                                    <x-input-search placeholder="Search kader.."
                                                        :url="route('admin.sk.index')" />
                                                </div>
                                                <div class="col">
                                                    <a href="{{ route('admin.biodata.create') }}"
                                                        class="btn btn-success btn-sm float-right">
                                                        <span><i class="fa fa-plus"></i></span>
                                                        Tambah
                                                    </a>
                                                </div>
                                            </div>
                                            <table class="table table-bordered text-center mt-2">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 3%">No</th>
                                                        <th>Nama</th>
                                                        <th>NIK</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan</th>
                                                        <th>Jabatan</th>
                                                        <th style="width: 10%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($biodatas as $i=>$biodata)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $biodata->name }}</td>
                                                        <td>{{ $biodata->nik }}</td>
                                                        <td>{{ $biodata->kecamatans->name }}</td>
                                                        <td>{{ $biodata->kelurahans->name }}</td>
                                                        <td></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <div class="col-1">
                                                                        <input class="lg-5" type="checkbox" name="id"
                                                                            wire:model="mySelected"
                                                                            value="{{ $biodata->id }}">
                                                                    </div>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <div class="col">
                                                                            <x-button-delete url="" id="">
                                                                            </x-button-delete>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="col-lg-12 mb-5 mt-2">
                                                <button type="submit" class="btn btn-success btn-sm float-right">
                                                    Simpan
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
    </div>
</x-card>

@endsection