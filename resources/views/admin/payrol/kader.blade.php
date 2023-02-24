@extends('layouts.backend.app', ['title' => 'Payrol Kader'])

@section('content')
<x-card title="Payrol Kader">
    <div class="mb-4 row">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-1 row">
            </div>
            <h2 style="text-align: center"> DINAS KESEHATAN </h2>
            <h2 style="text-align: center"> PUSKESMAS CANDI </h2>
            <h3 style="text-align: center"> Jl.M.Ridwan No.05 Gelam - Candi Telp (031)8963973 Sidoarjo 61271 </h3>
            <h3 style="text-align: center"> Email : candipuskesmas@gmail.com </h3>
            <h3 style="text-align: center"> SURAT PERINTAH </h3>
            <h3 style="text-align: center"> PEMINDAHBUKUAN KE MASING - MASING REKENING </h3>
            <h3 style="text-align: center"> Pembayaran Belanja Honor Kader Posyandu Balita (PROGRAM PRIORITAS) </h3>
        </div>
            <div class="col-lg-12 col-12">
                <div class="container-fluid">
                <div class="ml-5">
                    <div class="col">
                        <div class="card-body">
                        <div class="col mb-10">
                            <div class="mb-1 row">
                                <label for="" class="col-sm-4 col-form-label"> Yang bertanda tangan dibawah ini : </label>
                            </div>
                            <div class="mb-1 row">
                                <label for="" class="col-sm-4 col-form-label"> Kegiatan            : </label>
                            </div>
                            <div class="mb-1 row">
                                <label for="" class="col-sm-4 col-form-label"> Sub Kegiatan        : </label>
                            </div>
                            <div class="mb-1 row">
                                <label for="" class="col-sm-4 col-form-label"> Kode Rekening       : </label>
                            </div>
                            <div class="mb-1 row">
                                <label for="" class="col-sm-4 col-form-label"> Bagian Bulan        : </label>
                            </div>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 3%">No</th>
                                        <th>NO REKENING</th>
                                        <th>NAMA BANK</th>
                                        <th>NAMA</th>
                                        <th>JUMLAH UANG</th>
                                        <th>VOL</th>
                                        <th>JUMLAH TOTAL</th>
                                        <th>BIAYA TRANSFER</th>
                                        <th>JUMLAH DITERIMA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td> 1 </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                </tbody>
                                <tbody>
                                    <td> 2 </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                </tbody>
                                <tbody>
                                    <td> 3 </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4"> JUMLAH KESELURUAN </th>
                                        <th class=""></th>
                                        <th class=""></th>
                                        <th class=""></th>
                                        <th class=""></th>
                                        <th class=""></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</x-card>
@endsection