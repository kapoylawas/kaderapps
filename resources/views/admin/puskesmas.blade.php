@extends('layouts.backend.app', ['title' => 'Data Puskesmas'])

@section('content')
<x-card title="Data Puskesmas">
    <div class="col-lg-8 col-6">
        <div class="container-fluid">
            <div class="card">
                <div class="col">
                    <div class="card-body">
                        <div class="col">
                            <a href="" class="btn btn-success btn-sm float-right">
                                <span><i class="fa fa-plus"></i></span>
                                Tambah
                            </a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Puskesmas</th>
                                    <th>Kecamatan</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Puskesmas 1</td>
                                    <td>Sidoarjo</td>
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
                                                        <x-button-edit url=""></x-button-edit>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-1">
                                                        <x-button-delete url="" id=""></x-button-delete>
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
</x-card>
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