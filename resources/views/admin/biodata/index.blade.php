@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
<x-card title="Biodata dan History Jabatan">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="card">
                    <div class="col">
                        <div class="card-body">
                            <div class="mt-2 row">
                                <label for="bentuk" class="col-md-1 col-form-label">Filter</label>
                                <div class="col-sm-1">
                                    <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                        <option>Semua</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kelurahan">Kelurahan</option>
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <select class="form-control form-control-md" name="filter" id="filter">
                                        <option>Dropdown</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>No HP</th>
                                        <th style="width: 11%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($biodatas as $i=>$biodata)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $biodata->nik }}</td>
                                        <td>{{ $biodata->name }}</td>
                                        <td>{{ $biodata->alamat }}</td>
                                        <td>{{ $biodata->kecamatans->name }}</td>
                                        <td>{{ $biodata->kelurahans->name }}</td>
                                        <td>{{ $biodata->nohp }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-group">
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <div class="col-1">
                                                            <a type="submit"
                                                                href="{{ route('admin.biodata.show',$biodata->id) }}"
                                                                class="btn btn-sm btn-primary ms-auto" value="">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <x-button-edit
                                                            url="{{ route('admin.biodata.edit', $biodata->id) }}">
                                                        </x-button-edit>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <x-button-delete :id="$biodata->id"
                                                            :url="route('admin.biodata.destroy', $biodata->id)" />
                                                    </div>
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
    </div>
</x-card>
@endsection