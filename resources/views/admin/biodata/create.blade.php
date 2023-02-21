@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
{{-- <x-card title="Biodata dan History Jabatan"> --}}
    <div class="row">
        <div class="col-12">
            <div class="col-12">
                <x-input-search placeholder="Search kader.." :url="route('admin.user.index')" />
            </div>
            <x-card title="Data User">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biodatas as $i => $biodata)
                        <tr>
                            <td>{{ $biodata->$i }}</td>
                            <td>{{ $biodata->name }}</td>
                            <td>{{ $biodata->nik }}</td>
                            <td>{{ $biodata->alamat }}</td>
                            <td>{{ $biodata->kecamatan }}</td>
                            <td>{{ $biodata->kelurahan }}</td>
                            <td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
            <div class="d-flex justify-content-end">
                {{-- {{ $biodatas->links() }} --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="container-fluid">
                <div class="col mb-5 mt-5 ml-5">
                    <div class="card-body">
                        <div class="col">
                            <i class="fa fa-user-circle" style="font-size: 5rem"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <a class="btn btn-sm  btn-warning" href="">Biodata</a>
                                <a class="btn btn-sm  btn-warning" href="">History Jabatan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="nik"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="kota">
                                            <option value="">--Pilih Kota--</option>
                                            @foreach ($kotas as $kota)
                                            <option id="kota" class="form-control @error('kota') is-invalid @enderror"
                                                name="kota" value="{{ $kota->id }}">
                                                {{ $kota->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('kota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option value="">--Pilih Kecamatan--</option>
                                            @foreach ($kecamatans as $kecamatan)
                                            <option class="form-control @error('kecamatan') is-invalid @enderror"
                                                name="kota" value="{{ $kecamatan->id }}">
                                                {{ $kecamatan->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option value="">--Pilih Kelurahan--</option>
                                            @foreach ($kelurahans as $kelurahan)
                                            <option class="form-control @error('kelurahan') is-invalid @enderror"
                                                name="kelurahan" value="{{ $kelurahan->id }}">
                                                {{ $kelurahan->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('kelurahan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">No Rekening</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Bank</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Upload Buku Tabungan</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control form-control-md" id="" name="" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row float-right">
                                    <a type="submit" href="{{ route('admin.sk.create') }}"
                                        class="btn btn-warning btn-sm">
                                        Kembali
                                    </a>
                                    <a href="" class="btn btn-success btn-sm ml-1">
                                        Simpan
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
</x-card> --}}

<!-- JQuery -->
<script src=" https://code.jquery.com/jquery-3.5.1.js "></script>
<script>
    $(function(){
        $.ajaxSetup({
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $(function(){
            $('#kota').on('change',function(){
                let id_kota = $('#kota').val();

                // console.log(id_kota); 
                $.ajax({
                    type: 'POST',
                    url : '',
                    data : {id_kota :id_kota},
                    cache : false,

                    success::function(msg){
                        $('#kecamatan').html(msg);
                        $('#desa').('');
                    },
                    error: function(data){
                        console.log('error:', data)
                    },
                })
            })
        });
    });
</script>
@endsection