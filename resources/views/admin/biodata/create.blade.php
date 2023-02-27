@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
{{-- <x-card title="Biodata dan History Jabatan"> --}}
    <div class="row">
        <div class="col-10  ml-4">
            {{-- <div class="col-3">
                <x-input-search placeholder="Search kader.." :url="route('admin.user.index')" />
            </div> --}}
            <x-card class="col-8" title="Data User">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biodatas as $i => $biodata)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $biodata->name }}</td>
                            <td>{{ $biodata->nik }}</td>
                            <td>{{ $biodata->alamat }}</td>
                            <td>{{ $biodata->kecamatans->name }}</td>
                            <td>{{ $biodata->kelurahans->name }}</td>
                            {{-- <td>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-1">
                                                <input class="lg-5" style="width: 3rem" type="checkbox"
                                                    wire:model="mySelected" value="">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
            <div class="d-flex justify-content-end">
                {{-- {{ $biodatas->links() }} --}}
            </div>
            <button type="button" class="btn btn-success btn-sm mb-2 float-right" data-toggle="modal"
                data-target="#modal-default-tambah">
                <i class="fas fa-plus"></i> Tambah
            </button>
            <a href="{{ route('admin.sk.create') }}" class="btn btn-danger btn-sm mb-2 mr-2 float-right"> <i
                    class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="modal fade" id="modal-default-tambah">
        <div class="col-lg-14">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Kader</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.biodata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="" name="name" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="" name="nik" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="tempatLahir"
                                        name="tempatLahir" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control form-control-md" id="tglLahir"
                                        name="tglLahir" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="alamat" name="alamat"
                                        value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="kota" name="kota">
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
                                    <select class="form-control" name="kecamatan">
                                        <option value="">--Pilih Kecamatan--</option>
                                        @foreach ($kecamatans as $kecamatan)
                                        <option class="form-control @error('kecamatan') is-invalid @enderror"
                                            name="kecamatan" value="{{ $kecamatan->id }}">
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
                                    <select class="form-control" name="kelurahan">
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
                                    <input type="text" class="form-control form-control-md" id="nohp" name="nohp"
                                        value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">No Rekening</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="norek" name="norek"
                                        value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Bank</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="bank" name="bank">
                                        <option value="">--Pilih Bank--</option>
                                        @foreach ($banks as $bank)
                                        <option id="bank" class="form-control @error('bank') is-invalid @enderror"
                                            name="bank" value="{{ $bank->id }}">
                                            {{ $bank->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('bank')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Upload Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-md" id="foto" name="foto"
                                        value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Upload Buku Tabungan</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-md" id="tabungan"
                                        name="tabungan" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-md" id="ktp" name="ktp"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-success" type="submit" value="">Simpan
                            </button>
                        </div>
                    </form>
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