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
    <title>Rekomendasi Paspor Haji</title>
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
                    <h2 class="title">Form Pengajuan Rekomendasi Paspor Haji Kankemenag Kota Batu</h2>
                </div>
                <div class="card-body">
                <form enctype="multipart/form-data" action="/RekomHaji/upload" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="label--desc">Nama Pengaju Surat Paspor Haji</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Whatsapp</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="whatsapp" placeholder="Masukkan Nomor Whatsapp">
                                </div>
                                <div class="label--desc">Masukkan nomer wa agar mendapatkan balasan alternatif selain email</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dokumen Porsi Haji</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_porsi_haji" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">File dapat berbentuk jpg, png, ataupun pdf maksimal 2MB untuk pendaftaran sebelum April 2016 menggunakan lembar PPIH, untuk pendaftaran setelah April 2016 menggunakan SPPH. Max file size 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Scan KTP</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_ktp" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">File dapat berbentuk jpg, png, ataupun pdf. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Scan Kartu Keluarga</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_kk" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">File dapat berbentuk jpg, png, ataupun pdf. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dokumen Pendukung</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_pendukung" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">File dapat berbentuk jpg, png, ataupun pdf maksimal 2MB pilih data yang sama dengan KTP antara lain Akte Kelahiran/ Ijazah terakhir/ Buku Nikah (bisa salah satunya). Max file size 50 MB</div>
                            </div>
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