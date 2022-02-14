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
                                        <th scope="col">Asal Surat :</th>
                                        <th scope="col">{{$d->asal_surat}}</th>
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
                            <strong class="card-title">Surat Permohonan Rekomendasi</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_permohonan_rekom}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Susunan pengurus rumah ibadah/takmir</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_susunan_pengurus}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Kepemilikan Tanah/Status Tanah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_sk_tanah}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Domisili dari Desa/Kelurahan</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_sk_domisili}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Nama dan KTP Pengguna Rumah Ibadah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_nama_ktp}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Dukungan Masyarakat Setempat</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_dukungan}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection