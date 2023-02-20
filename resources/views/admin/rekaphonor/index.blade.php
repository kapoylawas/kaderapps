@extends('layouts.backend.app', ['title' => 'Rekap Honor'])

@section('content')
<x-card title="Rekap Honor">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
            <div class="col-lg-9">
            <div class="container-center">
                <div class="col mb-5 mt-5 ml-5">
                    <div class="mb-10 row">
                    </div>
                    <div class="card-body-center">
                    </div>
                    <div class="card">
                        <div class="ml-10">
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Tahun</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Tribulan Gaji</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="Krian">Krian</option>
                                            <option value="Sukodono">Sukodono</option>
                                            <option value="Wonoayu">Wonoayu</option>
                                            <option value="Tarik">Tarik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="Krian">Krian</option>
                                            <option value="Sukodono">Sukodono</option>
                                            <option value="Wonoayu">Wonoayu</option>
                                            <option value="Tarik">Tarik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="" class="col-sm-4 col-form-label">Kelompok Jabatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-md" name="bentuk" id="bentuk">
                                            <option value="Krian">Lurah</option>
                                            <option value="Sukodono">Modin</option>
                                            <option value="Wonoayu">Sekertaris</option>
                                            <option value="Tarik">Bendahara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col mb-6">
                                        <a href="{{ route('admin.rekaphonor.create') }}"
                                            class="btn btn-success btn-sm float-left">
                                            Tampilkan
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</x-card>
@endsection