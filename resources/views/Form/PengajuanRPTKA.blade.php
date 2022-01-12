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
    <title>Form Pengajuan RPTKA</title>

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
                    <h2 class="title">Form Pengajuan Rencana Penggunaan Tenaga Kerja Asing</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/PengajuanRPTKA/upload">
                    @csrf
                        <div class="form-row">
                        <div class="name">Nama Lembaga Asal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama_lembaga" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="label--desc">Lembaga Pendidikan atau Lembaga Keagamaan</div>
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
                            <div class="name">File Akta</div>
                            <div class="value">
                            <div class="input-group js-input-file">
                                    <input type="file" name="file_akta" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">akte notaris pendirian lembaga pendidikan/ lembaga pendidikan keagamaan/ lembaga keagamaan/ lembaga sosial/ badan hukum; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Statistik jamaah/peserta didik</div>
                            <div class="value">
                            <div class="input-group js-input-file">
                                    <input type="file" name="file_statistik" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Data statistik jumlah jamaah/peserta didik yang dilayani; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Legalitas</div>
                            <div class="value">
                            <div class="input-group js-input-file">
                                    <input type="file" name="file_legalitas" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Izin operasional atau tanda daftar lembaga/ yayasan dan struktur organisasi lembaga pendidikan/ lembaga pendidikan keagamaan/ lembaga keagamaan/lembaga sosial/ badan hukum; Maksimal file 2 file (leglitas dan struktur) masing-masing 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File nama orang asing dan pendamping</div>
                            <div class="value">
                            <div class="input-group js-input-file">
                                    <input type="file" name="file_orsing_pendamping" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Daftar nama Orang Asing dan tenaga pendamping dari Indonesia; dan Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Penunjukan pendamping orang asing</div>
                            <div class="value">
                            <div class="input-group js-input-file">
                                    <input type="file" name="file_surat_pendamping" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Surat penunjukan warga negara Indonesia sebagai pendamping Orang Asing; Maksimal file 2 MB</div>
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

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->