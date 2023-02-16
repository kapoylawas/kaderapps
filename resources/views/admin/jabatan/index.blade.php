@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')
<x-card title="Data Jabatan">
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
                                    <th style="width: 5%">No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Nominal Gaji</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($jabatan as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->tarifgaji }}</td>
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
                                                        <x-button-edit
                                                            url="{{ route('admin.jabatan.edit',$data->id) }}">
                                                        </x-button-edit>
                                                    </div>
                                                </div>
                                        </form>
                                        <div class="form-group">
                                            <div class="col-1">
                                                <x-button-delete url="{{ route('admin.jabatan.destroy',$data->id) }}"
                                                    id="{{ $data->id }}">
                                                </x-button-delete>
                                            </div>
                                        </div>
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