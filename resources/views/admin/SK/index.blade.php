@extends('layouts.backend.app', ['title' => 'Data SK'])

@section('content')
<x-card title="Data SK">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="card">
                    <div class="col">
                        <div class="card-body">
                            <div class="mt-2 row">
                                <label for="bentuk" class="col-md-1 col-form-label">Filter</label>
                                <div class="col-sm-2">
                                    <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                        <option>Semua</option>
                                        <option value="Tahun">Tahun</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kelurahan">Kelurahan</option>
                                        <option value="Kelompok Jabatan">Kelompok Jabatan</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control form-control-md" name="filter" id="filter">
                                        <option>Dropdown</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col mb-5">
                                <a href="{{ route('admin.sk.create') }}"
                                    class="btn btn-success btn-sm float-right">
                                    <span><i class="fa fa-plus"></i></span>
                                    Tambah
                                </a>
                            </div>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 4%">No</th>
                                        <th>Tahun</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>No SK</th>
                                        <th>Kelompok Jabatan</th>
                                        <th style="width: 10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2023</td>
                                        <td>Wonoayu</td>
                                        <td>Candinegoro</td>
                                        <td>081282561</td>
                                        <td>Kader</td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-1">
                                                            <a type="submit" href="{{ route('admin.sk.create') }}"
                                                                class="btn btn-sm btn-primary ms-auto" value="">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-1">
                                                            <x-button-edit url=""></x-button-edit>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-card>
@endsection