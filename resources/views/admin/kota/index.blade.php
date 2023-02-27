@extends('layouts.backend.app', ['title' => 'Data Bank'])

@section('content')

<x-card title="Data Kota">

    <div class="col-lg-6 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.kota.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Kota</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kotas as $i => $kota)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $kota->name }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.kota.edit', $kota->id)" />
                                        <x-button-delete :id="$kota->id"
                                            :url="route('admin.kota.destroy', $kota->id)" />
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