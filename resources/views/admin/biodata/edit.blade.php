@extends('layouts.backend.app', ['title' => 'Biodata dan History Jabatan'])

@section('content')
{{-- <x-card-form title="EDIT BIODATA" url="{{ route('admin.biodata.index') }}"> --}}
    <div class="col-md-6 ml-5">
        <x-card class="col-md-5" title="Data Kader">
            <form action="{{ route('admin.biodata.update', $biodata->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{-- @method('POST') --}}
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="name"
                                value="{{ $biodata->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="" name="nik"
                                value="{{ $biodata->nik }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control form-control-md" id="tglLahir" name="tglLahir"
                                value="{{ $biodata->tglLahir }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="alamat" name="alamat"
                                value="{{ $biodata->alamat }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kota" name="kota">
                                <option value="">--Pilih Kota--</option>
                                @foreach ($kotas as $kota)
                                <option id="kota" class="form-control @error('kota') is-invalid @enderror" name="kota"
                                    value="{{ $kota->id }}">
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
                                <option value="{{ $biodata->kecamatans->name }}"></option>
                                @foreach ($kecamatans as $kecamatan)
                                <option class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan"
                                    value="{{ $kecamatan->id }}">
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
                                <option value="{{ $biodata->kelurahans->name }}"></option>
                                @foreach ($kelurahans as $kelurahan)
                                <option class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan"
                                    value="{{ $kelurahan->id }}">
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
                                value="{{ $biodata->tlp }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">No Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-md" id="norek" name="norek"
                                value="{{ $biodata->norek }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bank</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="bank" name="bank">
                                <option value="">--Pilih Bank--</option>
                                @foreach ($banks as $bank)
                                <option id="bank" class="form-control @error('bank') is-invalid @enderror" name="bank"
                                    value="{{ $bank->id }}">
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
                            <input type="file" class="form-control form-control-md" id="foto" name="foto" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Upload Buku Tabungan</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-md" id="tabungan" name="tabungan"
                                value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-md" id="ktp" name="ktp" value="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        {{-- {{ $biodatas->links() }} --}}
                        <a href="{{ route('admin.biodata.index') }}"
                            class="btn btn-danger btn-sm mb-2 ml-2 float-right">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-success btn-sm mb-2 ml-2 float-right"><i
                                class="fas fa-plus"></i>
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </x-card>
        {{--
</x-card-form> --}}
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