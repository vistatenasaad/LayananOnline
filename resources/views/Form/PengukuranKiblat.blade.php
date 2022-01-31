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
    <title>Form Pengukuran Arah Kiblat</title>

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
                    <h2 class="title">Pengukuran Arah Kiblat</h2>
                </div>
                <div class="card-body">
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
				@endif
                    <form method="POST" enctype="multipart/form-data" action="/PengukuranKiblat/upload">
                    @csrf
                        <div class="form-row">
                        <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama" required placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Masjid atau Mushalla</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama_masjid" required placeholder="Masukkan Nama Masjid atau Mushalla">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="email" required placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Whatsapp</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="whatsapp" required placeholder="Masukkan Nomor Whatsapp">
                                </div>
                                <div class="label--desc">Masukkan nomer wa agar mendapatkan balasan alternatif selain email</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Permohonan</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_permohonan" required placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Surat Permohonan Pengukuran arah Kiblat yang ditujukan kepada Kankemenag Kota Batu. Maksimal file 2 MB dengan jenis file .jpg, .png, .pdf, .jpe</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto Tempat/ Lokasi</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_lokasi" required placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Foto lokasi yang dimintakan pengukuran arah kiblat pada Kankemenag Kota Batu dengan ukuran file. Maksimal 2MB dengan jenis file .jpg, .png, .gif, .jpeg</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="captcha">Captcha</label>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        </div>
                        <div class="card-footer">
                            <p>Catatan: Pastikan isian sudah sesuai sebelum melakukan kirim data</p><br>
                            <button class="bg-button" type="submit">Ajukan</button>
                        </div>
                    </form>
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