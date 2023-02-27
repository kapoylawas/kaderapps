@extends('layouts.backend.app', ['title' => 'Data Bank'])

@section('content')

<x-card title="Data Kecamatan">

    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.kecamatan.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Kota</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kecamatans as $i => $kecamatan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $kecamatan->name }}</td>
                                    <td>{{ $kecamatan->kotas->name }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.kecamatan.edit', $kecamatan->id)" />
                                        <x-button-delete :id="$kecamatan->id"
                                            :url="route('admin.kecamatan.destroy', $kecamatan->id)" />
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