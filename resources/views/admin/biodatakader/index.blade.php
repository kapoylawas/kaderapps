@extends('layouts.backend.app', ['title' => 'User'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="Biodata Kader">
                <div class="mt-2">
                <div class="col-10">
                    <x-input-search placeholder="Search biodata.." :url="route('admin.biodatakader.index')" />
                </div>
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
                <div class="col mb-5">
                    <a href="{{ route('admin.biodatakader.create') }}"
                        class="btn btn-success btn-sm float-right">
                        <span><i class="fa fa-plus"></i></span>
                        Tambah
                    </a>
                </div>
                </div>
            </x-card>
        </div>        
    </div>
@endsection