@extends('layouts.layout')

@section('nama_user', 'Admin Back Office')
@section('page_title', $pagetitle)
@section('sub_title', $subtitle)
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Email</th>
                                    <th>Layanan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$d->kode}}</td>
                                    
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->layanan}}</td>
                                    <td>{{$d->status}}</td>
                                    <td>                                       
                                        <a href="/detail/{{$d->layanan}}/{{$d->kode}}"><button type="button" class="btn btn-warning btn-sm">Lihat detail</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection