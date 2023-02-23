@extends('layouts.backend.app', ['title' => 'Data Bank'])

@section('content')

<x-card title="Data Kelurahan">

    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.kelurahan.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Kelurahan / Desa</th>
                                    <th>Nama Kecamatan</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelurahans as $i => $kelurahan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $kelurahan->name }}</td>
                                    <td>{{ $kelurahan->kecamatans->name }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.kelurahan.edit', $kelurahan->id)" />
                                        <x-button-delete :id="$kelurahan->id"
                                            :url="route('admin.kelurahan.destroy', $kelurahan->id)" />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-card>

@endsection