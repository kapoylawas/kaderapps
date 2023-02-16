@extends('layouts.backend.app', ['title' => 'Data Bank'])

@section('content')

<x-card title="Data Bank">

    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="ml-5">
                <div class="col">
                    <div class="card-body">
                        <div class="col mb-5">
                            <a href="{{ route('admin.bank.create') }}" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Bank</th>
                                    <th>Biaya Transfer</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banks as $i => $bank)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $bank->name }}</td>
                                    <td>{{ $bank->biayatf }}</td>
                                    <td>
                                        <x-button-edit :url="route('admin.bank.edit', $bank->id)" />
                                        <x-button-delete :id="$bank->id"
                                            :url="route('admin.bank.destroy', $bank->id)" />
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