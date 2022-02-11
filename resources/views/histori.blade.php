@extends('layouts.layout')

@if(auth()->user()->role == 'admin1')
    @section('nama_user', 'Admin Front Office')
@endif
@if(auth()->user()->role == 'admin2')
    @section('nama_user', 'Admin Back Office')
@endif
@if(auth()->user()->role == 'superadmin')
    @section('nama_user', 'Super Admin')
@endif

@section('page_title', $pagetitle)
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$d->kode}}</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Email :</th>
                                        <th scope="col">{{$d->email}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Whatsapp :</th>
                                        <th scope="col">{{$d->whatsapp}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Layanan :</th>
                                        <th scope="col">{{$d->layanan}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Status :</th>
                                        <th scope="col">{{$d->status}}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Bordered Table</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tgl</th>
                                    <th scope="col">Proses</th>
                                    <th scope="col">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{$d->created_at}}</th>
                                    <td>Data berhasil di upload user</td>
                                    <td>{{$d->email}}</td>
                                </tr>
                                @if($d->admin_verif != null)
                                <tr>
                                    <th scope="row">{{$d->tgl_verif}}</th>
                                    <td>Selesai diperiksa oleh admin front office</td>
                                    <td>{{$d->admin_verif}}</td>
                                </tr>
                                @endif
                                @if($d->admin_tolak != null)
                                <tr>
                                    <th scope="row">{{$d->tgl_tolak}}</th>
                                    <td>Pengajuan ditolak</td>
                                    <td>{{$d->admin_tolak}}</td>
                                </tr>
                                @endif
                                
                                @if($d->admin_selesai != null)
                                <tr>
                                    <th scope="row">{{$d->tgl_selesai}}</th>
                                    <td>Pengajuan selesai</td>
                                    <td>{{$d->admin_selesai}}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

               
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection