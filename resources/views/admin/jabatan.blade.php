@extends('layouts.backend.app', ['title' => 'Data Jabatan'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="alert alert-dark">
            <h3>Data Jabatan</h3>
        </div>
    </div>

    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="card">
                <div class="col">
                    <div class="card-body">
                        <a href="" class="btn btn-success btn-sm float-right">
                            <span><i class="fa fa-plus"></i></span>
                            Tambah
                        </a>
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Nominal Gaji</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jabatan 1</td>
                                    <td>Rp. 30.000</td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <button type="submit" href=""
                                                            class="btn btn-sm btn-primary ms-auto" value="">
                                                            <i class="fa fa-eye"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <button type="submit" href=""
                                                            class="btn btn-sm btn-success ms-auto" value="">
                                                            <i class="fa fa-pencil"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <button type="submit" href=""
                                                            class="btn btn-sm btn-danger ms-auto" value="">
                                                            <i class="fa fa-trash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-course'), {
                chart: {
                    type: "donut",
                    fontFamily: 'inherit',
                    height: 500,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: true
                    },
                },
                fill: {
                    opacity: 1,
                },
                grid: {
                    strokeDashArray: 4,
                },
                colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                legend: {
                    show: true,
                    position: 'top'
                },
                tooltip: {
                    fillSeriesColor: true
                },
                dataLabels: {
                    enabled: true,
                },
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            })).render();
        });
</script>
@endpush