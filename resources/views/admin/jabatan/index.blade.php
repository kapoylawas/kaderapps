@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')

<x-card title="LIST JABATAN">
    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.jabatan.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Name</th>
                                    <th>Kelompok Jabatan</th>
                                    <th>Tarif Gaji</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatans as $i => $jabatan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $jabatan->name }}</td>
                                    <td>{{ $jabatan->kelompokjabatan }}</td>
                                    <td>{{ $jabatan->tarifgaji }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.jabatan.edit', $jabatan->id)" />
                                        <x-button-delete :id="$jabatan->id"
                                            :url="route('admin.jabatan.destroy', $jabatan->id)" />
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