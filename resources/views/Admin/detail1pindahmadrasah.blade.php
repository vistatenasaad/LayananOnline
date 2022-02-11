@extends('layouts.layout')

@section('nama_user', 'Admin Front Office')
@section('page_title', $pagetitle)
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                @foreach($data as $d)
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$d->kode}}</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Siswa :</th>
                                        <th scope="col">{{$d->nama_siswa}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Asal Madrasah :</th>
                                        <th scope="col">{{$d->asal_madrasah}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Madrasah dan Kota yang Tertuju :</th>
                                        <th scope="col">{{$d->madrasah_dituju}}</th>
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
                            <strong class="card-title">Surat Permohonan Rekomendasi Pindah Sekolah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_permohonan_rekomendasi}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Pindah Sekolah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_sk_pindah}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Diterima</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_sk_diterima}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Raport Siswa</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/public/{{$d->file_rapot_siswa}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
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

                @endforeach

            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection