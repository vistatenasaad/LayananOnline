<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pengajuan Visa Tinggal Terbatas</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{!! asset('assets/css/main.css') !!}" rel="stylesheet" media="all">
    <style type="text/css">
         html,body{height: 100%;}
         .bg-utama{
            background-color: #1ca223
         }
         .bg-button{
            background-color: #1ca223; /* Hijau */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
      </style>
</head>

<body>
    <div class="bg-utama">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <br><br>
                    <h2 class="title">Pengajuan Visa Tinggal Terbatas</h2>
                </div>
                <div class="card-body">
                @if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<strong>{{ $message }}</strong>
				</div>
				@endif
                    @csrf
                        <div class="form-row">
                        <h3>Form Surat Masuk</h3>
                        </div>
                        <div class="form-row">
                            <div>Surat anda berhasil kami terima, silahkan menunggu balasan email dari ptspkemenagbatu@gmail.com
                                    dalam waktu sesegera mungkin. Silahkan unduh tanda terima anda pada tombol dibawah berikut.
                            </div>
                        </div>
                        <div class="card-footer">
                             <!-- tambah detail-->
                            <a href="/PengajuanVVT_sm/cetak_pdf/{{$details}}" class="bg-button" type="submit">Download pdf</a>
                        </div>
                        <div class="form-row">
                            <div>Pastikan pula anda mendapatkan pemberitahuan pengajuan yang anda lakukan pada email (mungkin saja masuk di kotak spam).
                        </div>
                        <br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->