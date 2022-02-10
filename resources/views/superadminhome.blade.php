@extends('layouts.layout')

@section('nama_user', 'Super Admin')
@section('content')

<div class="content mt-3">

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">{{$jml1}}</span>
                </h4>
                <p class="text-light">Total Admin</p>
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
                <p class="text-light">Admin Front Office</p>

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
                <p class="text-light">Admin Back Office</p>
            </div>
        </div>
    </div>
    <!--/.col-->
</div> <!-- .content -->

@endsection