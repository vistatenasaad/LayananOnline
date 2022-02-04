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
                                        <th scope="col">Nama Pemohon :</th>
                                        <th scope="col">{{$d->nama_pemohon}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Masjid atau Mushalla :</th>
                                        <th scope="col">{{$d->nama_masjid}}</th>
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
                            <iframe src="/{{$d->file_permohonan_rekom}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Terdaftar dari KUA</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_sk_terdaftar}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Proposal Permohonan Bantuan</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_permohonan_bantuan}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('verif1', ['id'=>$d->kode])}}"><button type="button" class="btn btn-success btn-sm">Verifikasi</button></a>
                            <a href="{{route('tolak1', ['id'=>$d->kode])}}"><button type="button" class="btn btn-danger btn-sm">Tolak</button></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection