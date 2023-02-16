@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')

<div class="row">
    <div class="col-12">
        <x-button-create title="ADD NEW JABATAN" :url="route('admin.jabatan.create')" />
        <x-card title="LIST JABATAN">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NAME</th>
                        <th>kelompok jabatan</th>
                        <th>tarifgaji</th>
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
                                <x-button-delete :id="$jabatan->id" :url="route('admin.jabatan.destroy', $jabatan->id)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>
        <div class="d-flex justify-content-end">{{ $jabatans->links() }}</div>
    </div>
</div>
@endsection