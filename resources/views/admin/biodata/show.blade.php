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
    <x-card class="col-md-5" title="Data Kader">
        <div class="modal-body">
            <div class="mb-3 row">
                <img src="{{url('/foto/'.$biodata->foto)}}" width="120" height="120" class="rounded-circle" alt=" Foto
                    Kader">
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="" name="name"
                        value="{{ $biodata->name }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="" name="nik" value="{{ $biodata->nik }}"
                        readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control form-control-md" id="tglLahir" name="tglLahir"
                        value="{{ $biodata->tglLahir }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="alamat" name="alamat"
                        value="{{ $biodata->alamat }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="kota" name="kota"
                        value="{{ $biodata->id_kota }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="kecamatan" name="kecamatan"
                        value="{{ $biodata->id_kecamatan }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="kelurahan" name="kelurahan"
                        value="{{ $biodata->id_kelurahan }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="nohp" name="nohp"
                        value="{{ $biodata->nohp }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">No Rekening</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="norek" name="norek"
                        value="{{ $biodata->norek }}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Bank</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-md" id="bank" name="bank"
                        value="{{ $biodata->id_bank }}" readonly>
                </div>
            </div>
            {{-- <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Upload Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control form-control-md" id="foto" name="foto" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Upload Buku Tabungan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control form-control-md" id="tabungan" name="tabungan" value="">
                </div>
            </div> --}}
            {{-- <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control form-control-md" id="ktp" name="ktp" value="">
                </div>
            </div> --}}
            <div class="d-flex justify-content-end">
                {{-- {{ $biodatas->links() }} --}}
                <a href="{{ route('admin.biodata.index') }}" class="btn btn-danger btn-sm mb-2 ml-2 float-right">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </x-card>
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