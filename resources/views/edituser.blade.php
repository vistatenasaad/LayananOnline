<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Kementerian Agama Kota Batu</title>
    <meta name="description" content="Admin - Kementerian Agama Kota Batu">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{asset('bootstrap/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('updateuser', $data->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data['name'] }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="role" name="role" class="form-control">
                                    <option value="admin1" <?php if($data->role == 'admin1') echo 'selected'; ?>>Admin Front Office</option>
                                    <option value="admin2" <?php if($data->role == 'admin2') echo 'selected'; ?>>Admin Back Office</option>
                                    <option value="superadmin"<?php if($data->role == 'superadmin') echo 'selected'; ?>>Super Admin</option>
                                </select>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data['email'] }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">Layanan</label></div>
                            <div class="col col-md-6">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="pengukuran_kiblat" value="1" class="form-check-input" <?php if($data->pengukuran_kiblat == '1') echo 'checked'; ?>>Pengukuran Kiblat
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="permohonan_slipgaji" value="1" class="form-check-input" <?php if($data->permohonan_slipgaji == '1') echo 'checked'; ?>> Permohonan Slip Gaji
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="permohonan_pajak" value="1" class="form-check-input" <?php if($data->permohonan_pajak == '1') echo 'checked'; ?>> Permohonan Bukti Pajak
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label "> 
                                            <input type="checkbox" id="checkbox4" name="pengajuan_rptka" value="1" class="form-check-input" <?php if($data->pengajuan_rptka == '1') echo 'checked'; ?>> Rencana Penggunaan Tenaga Kerja Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox5" name="pengajuan_imta" value="1" class="form-check-input" <?php if($data->pengajuan_imta == '1') echo 'checked'; ?>> Izin Menggunakan Tenaga Kerja Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox6" name="pengajuan_d_k_p" value="1" class="form-check-input" <?php if($data->pengajuan_d_k_p == '1') echo 'checked'; ?>> Dana Kompensasi Penggunaan Orang Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox7" name="pengajuan_vvt" value="1" class="form-check-input" <?php if($data->pengajuan_vvt == '1') echo 'checked'; ?>> Visa Tinggal Terbatas
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox9" name="pengajuan_kitab" value="1" class="form-check-input" <?php if($data->pengajuan_kitab == '1') echo 'checked'; ?>> Kartu Izin Tinggal Tetap
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox8" name="pengajuan_naturalisasi" value="1" class="form-check-input" <?php if($data->pengajuan_naturalisasi == '1') echo 'checked'; ?>> Naturalisasi
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">      
                                            <input type="checkbox" id="checkbox10" name="rekom_pendirian_ri" value="1" class="form-check-input" <?php if($data->rekom_pendirian_ri == '1') echo 'checked'; ?>> Rekomendasi Ijin Pendirian Rumah Ibadah
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox11" name="rekom_bantuan_masjid" value="1" class="form-check-input" <?php if($data->rekom_bantuan_masjid == '1') echo 'checked'; ?>> Rekom Bantuan Masji
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox12" name="pindah_madrasah" value="1" class="form-check-input" <?php if($data->pindah_madrasah == '1') echo 'checked'; ?>> Rekom Pindah Madrasah
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox13" name="rekom_sln" value="1" class="form-check-input" <?php if($data->rekom_sln == '1') echo 'checked'; ?>> Pengantar Rekom Studi Luar Negeri
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox14" name="rekom_umroh" value="1" class="form-check-input" <?php if($data->rekom_umroh == '1') echo 'checked'; ?>> Rekom Paspor Umroh
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox15" name="rekom_haji" value="1" class="form-check-input" <?php if($data->rekom_haji == '1') echo 'checked'; ?>> Rekom Paspor Haji
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
                                Edit User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('bootstrap/vendors/jquery/dist/jquery.min.j')}}s"></script>
    <script src="{{asset('bootstrap/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/assets/js/main.js')}}"></script>


</body>

</html>