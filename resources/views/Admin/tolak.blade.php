@extends('layouts.layout')

@section('nama_user', 'Admin Front Office')
@section('page_title', 'Tolak')
@section('content')
<!-- <div class="col-lg-6"> -->
<div class="card">
    <div class="card-header">
        Tambahkan keterangan alasan penolakan berkas!
    </div>
    <div class="card-body card-block">
        @foreach($data as $d)
        <form action="/subtolak1" method="post" class="form-horizontal">
            @csrf
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row form-group">
                        <input type="hidden" name="kode" value="{{ $d->kode }}">
                        <input type="hidden" name="layanan" value="{{ $d->layanan }}">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Keterangan</label></div>
                        <div class="col-12 col-md-9"><textarea name="pesan" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Cancel
                </button>
            </div>
        </form>
        @endforeach
    </div>
</div>
<!-- </div> -->

@endsection