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
                    <form method="POST" action="{{ route('saveuser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                    <option value="admin1">Admin Front Office</option>
                                    <option value="admin2">Admin Back Office</option>
                                    <option value="superadmin">Super Admin</option>
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
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">Layanan</label></div>
                            <div class="col col-md-6">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="kiblat" value="1" class="form-check-input">Pengukuran Kiblat
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="slipgaji" value="1" class="form-check-input"> Permohonan Slip Gaji
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="pajak" value="1" class="form-check-input"> Permohonan Bukti Pajak
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox4" name="rptka" value="1" class="form-check-input"> Rencana Penggunaan Tenaga Kerja Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox5" name="imta" value="1" class="form-check-input"> Izin Menggunakan Tenaga Kerja Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox6" name="dkp" value="1" class="form-check-input"> Dana Kompensasi Penggunaan Orang Asing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox7" name="vtt" value="1" class="form-check-input"> Visa Tinggal Terbatas
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox9" name="kitab" value="1" class="form-check-input"> Kartu Izin Tinggal Tetap
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox8" name="naturalisasi" value="1" class="form-check-input"> Naturalisasi
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox10" name="pendirianri" value="1" class="form-check-input"> Rekomendasi Ijin Pendirian Rumah Ibadah
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox11" name="bmasjid" value="1" class="form-check-input"> Rekom Bantuan Masji
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox12" name="madrasah" value="1" class="form-check-input"> Rekom Pindah Madrasah
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox13" name="sln" value="1" class="form-check-input"> Pengantar Rekom Studi Luar Negeri
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox14" name="umroh" value="1" class="form-check-input"> Rekom Paspor Umroh
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox15" name="haji" value="1" class="form-check-input"> Rekom Paspor Haji
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
                                {{ __('Register') }}
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