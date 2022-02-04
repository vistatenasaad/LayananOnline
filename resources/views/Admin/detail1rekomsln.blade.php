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
                                        <th scope="col">Asal Madrasah/Pondok :</th>
                                        <th scope="col">{{$d->asal_madrasah}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Negara Tujuan :</th>
                                        <th scope="col">{{$d->negara_tujuan}}</th>
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
                            <strong class="card-title">Surat Permohonan</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_surat_permohonan}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Keterangan Diterima</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_sk_diterima}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Jaminan</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_surat_jaminan}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Legalisir Ijazah</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_legalisir_ijazah}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Scan Paspor</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_scan_paspor}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Biodata Pemohon</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_biodata}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Pakta Integritas</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_pakta_integritas}}" width="100%" style="height:500px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Surat Pernyataan Kebenaran Dokumen</strong>
                        </div>
                        <div class="card-body">
                            <iframe src="/{{$d->file_pernyataan}}" width="100%" style="height:500px"></iframe>
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