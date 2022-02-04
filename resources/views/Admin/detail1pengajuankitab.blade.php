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
                                        <th scope="col">Nama :</th>
                                        <th scope="col">{{$d->nama}}</th>
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
                            <strong class="card-title">File Legalitas</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_legalitas}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File DRH</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_drh}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Ijazah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_ijazah}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File RPTKA dan IMTA</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_rptka_imta}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Statistik jamaah/peserta didik</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_statistik}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Paspor dan KITAS</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_paspor_kitas}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Polis Asuransi</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_polis_asuransi}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Foto</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_foto}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File SKKB/SKCK</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_skkb_skck}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">File Surat Persetujuan Sebelumnya</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_persetujuan_sebelumnya}}" width="100%" style="height:500px"></iframe>
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