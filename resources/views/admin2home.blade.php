@extends('layouts.layout')
@section('nama_user', 'Admin Back Office')
@section('content')

<div class="content mt-3">

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml1}}</span>
                </h4>
                <p class="text-light">Data Masuk Seluruhnya</p>
            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml2}}</span>
                </h4>
                <p class="text-light">Belum Diperiksa Admin Back Office</p>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml3}}</span>
                </h4>
                <p class="text-light">Pengajuan Telah Selesai</p>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml4}}</span>
                </h4>
                <p class="text-light">Pengajuan ditolak</p>

            </div>
        </div>
    </div>
    <!--/.col-->

</div> <!-- .content -->

@endsection