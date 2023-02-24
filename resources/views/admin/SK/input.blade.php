@extends('layouts.backend.app', ['title' => 'Data SK'])

@section('content')
<x-card title="Input Data SK">
    <div class="row">
        <div class="col">
            <div class="col-lg-7">
                <div class="container-fluid">
                    <div class="col mb-10 mt-10 ml-10">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control form-control-md" id="" name=""
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-7">
                                                <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                                    <option value="Krian">Krian</option>
                                                    <option value="Sukodono">Sukodono</option>
                                                    <option value="Wonoayu">Wonoayu</option>
                                                    <option value="Tarik">Tarik</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                                            <div class="col-sm-7">
                                                <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                                    <option value="Krian">Krian</option>
                                                    <option value="Sukodono">Sukodono</option>
                                                    <option value="Wonoayu">Wonoayu</option>
                                                    <option value="Tarik">Tarik</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">Kelompok Jabatan</label>
                                            <div class="col-sm-7">
                                                <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                                    <option value="Krian">Lurah</option>
                                                    <option value="Sukodono">Modin</option>
                                                    <option value="Wonoayu">Sekertaris</option>
                                                    <option value="Tarik">Bendahara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">No SK</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control form-control-md" id="" name=""
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal SK</label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control form-control-md" id="" name=""
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="" class="col-sm-2 col-form-label">Upload File SK</label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control form-control-md" id="" name=""
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="card-body">
                    <div class="col mb-5">
                        <a href="{{ route('admin.biodata.create') }}" class="btn btn-success btn-sm float-right">
                            <span><i class="fa fa-plus"></i></span>
                            Tambah
                        </a>
                    </div>
                    <table class="table table-bordered text-center">
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
                            <tr>
                                <td>1</td>
                                <td>Sueb</td>
                                <td>3515115422650</td>
                                <td>Wonoayu</td>
                                <td>Candinegoro</td>
                                <td>Lurah</td>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-1">
                                                    <input class="lg-5" style="width: 3rem" type="checkbox" wire:model="mySelected" value="" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-1">
                                                    <x-button-delete url="" id=""></x-button-delete>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div class="col-lg-12 mb-5 ">
                <a href="" class="btn btn-success btn-sm float-right">
                    Simpan
                </a>
            </div>
        </div>
    </div>
</x-card>
@endsection