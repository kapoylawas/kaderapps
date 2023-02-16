@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')
<x-card title="Data Jabatan">
    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ 'add-jabatan' }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Nominal Gaji</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jabatan 1</td>
                                    <td>Rp. 30.000</td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <button type="submit" href=""
                                                            class="btn btn-sm btn-primary ms-auto" value="">
                                                            <i class="fa fa-eye"></i></span>
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
</x-card>
@endsection