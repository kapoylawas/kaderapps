@extends('layouts.backend.app', ['title' => 'Rekap Honor'])

@section('content')
<x-card title="Rekap Honor">
    <div class="row">
        <div class="col-lg-12">
            <h2 style="text-align: center"> Honor Kader, PPKDB, dan PPKBD Sub </h2>
            <h3 style="text-align: center"> Tribulan I (Januari - Maret 2023) </h3>
        </div>
        <div class="col-lg-12 col-12">
            <div class="container-fluid">
        <div class="ml-5">
        <div class="col">
            <div class="card-body">
            <div class="col mb-10">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th style="width: 3%">No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Jabatan</th>
                            <th>No Rekening</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td> 1 </td>
                        <td> 351354521466 </td>
                        <td> Asep </td>
                        <td> Buduran </td>
                        <td> Pagerwojo </td>
                        <td> Bendahara </td>
                        <td> - </td>
                        <td> - </td>
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
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="7"> Total </th>
                            <th class=" ">  </th>
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
    </div>
</x-card>
@endsection