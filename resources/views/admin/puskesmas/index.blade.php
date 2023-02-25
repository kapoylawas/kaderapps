@extends('layouts.backend.app', ['title' => 'Data Puskesmas'])

@section('content')
<x-card title="Data Puskesmas">
    <div class="col-lg-10 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.puskesmas.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Puskesmas</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($puskesmas as $i => $puskesmas)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $puskesmas ->name }}</td>
                                    <td>{{ $puskesmas->alamat }}</td>
                                    <td>{{ $puskesmas->email }}</td>
                                    <td>{{ $puskesmas->tlp }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.puskesmas.edit', $puskesmas->id)" />
                                        <x-button-delete :id="$puskesmas->id"
                                            :url="route('admin.puskesmas.destroy', $puskesmas->id)" />
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