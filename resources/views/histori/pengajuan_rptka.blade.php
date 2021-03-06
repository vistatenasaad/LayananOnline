@extends('layouts.layout')

@section('nama_user', 'Admin Front Office')
@section('page_title', $pagetitle)
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Histori Tracking</strong>
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
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$d->kode}}</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama :</th>
                                        <th scope="col">{{$d->nama_lembaga}}</th>
                                    </tr>
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

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Akta</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_akta}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Statistik jamaah/peserta didiki</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_statistik}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Legalitas</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_legalitas}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Nama Orang Asing dan Pendamping</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_orsing_pendamping}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Penunjukan Pendamping Orang Asing</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_surat_pendamping}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <<div class="card-body">
                        @if(auth()->user()->role == 'admin1')
                            <a href="{{route('verif1', ['id'=>$d->kode])}}"><button type="button" class="btn btn-success btn-sm">Verifikasi</button></a>
                            <a href="{{route('tolak1', ['id'=>$d->kode])}}"><button type="button" class="btn btn-danger btn-sm">Tolak</button></a>
                            @endif
                            @if(auth()->user()->role == 'admin2')
                            <a href="{{route('verif2', ['id'=>$d->kode])}}"><button type="button" class="btn btn-success btn-sm">Verifikasi</button></a>
                            <a href="{{route('tolak2', ['id'=>$d->kode])}}"><button type="button" class="btn btn-danger btn-sm">Tolak</button></a>
                            @endif
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection