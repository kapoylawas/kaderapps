@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
<div class="col-md-6 ml-5">
    <div class="row mb-4 ml-2">
        <form action="" method="GET">
            @csrf
            <a href="{{ route('admin.biodata.show', $biodata->id) }}" type="submit"
                class="btn btn-warning btn-sm mr-3">Biodata</a>
        </form>
        <form action="" method="GET">
            @csrf
            <a href="{{ route('admin.riwayatjabatan.show', $biodata->id) }}" class="btn btn-warning btn-sm">Riwayat
                Jabatan</a>
        </form>
    </div>
    <x-card class="col-md-5" title="Riwayat Jabatan">
        <div class="modal-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th style="width: 5%">No</th>
                        <th>Tahun</th>
                        <th>Jabatan</th>
                        <th>No SK</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayatjabatan as $i=>$data)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $data->tahun }}</td>
                        <td>{{ $data->id_jabatan }}</td>
                        <td>{{ $data->id_sk }}</td>
                        {{-- <td>{{ $data->kecamatans->name }}</td>
                        <td>{{ $data->kelurahans->name }}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{-- {{ $biodatas->links() }} --}}
                <a href="{{ route('admin.biodata.index') }}" class="btn btn-danger btn-sm mb-2 ml-2 float-right">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </x-card>
</div>

@endsection