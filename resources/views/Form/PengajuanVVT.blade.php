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
    <title>Form Pengajuan VVT</title>

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
                    <h2 class="title">Form Pengajuan Visa Tinggal Terbatas</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                        <div class="name">Nama Lembaga Asal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nam_lembaga" placeholder="Masukkan Nama Anda">
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
                            <div class="name">File legalitas</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_legalitas" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Izin operasional atau tanda daftar lembaga/ yayasan; Maksimal file 2 file masing-masing 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File DRH</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_drh" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Daftar riwayat hidup Orang Asing Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Ijazah</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_ijazah" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Foto copy ijazah Orang Asing Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File RPTKA</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_rptka" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">RPTKA (Rencana Penggunaan Tenaga Kerja Asing);(khusus rohaniwan dan tenaga ahli, mahasiswa/pelajar tidak perlu) Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Statistik jamaah/peserta didik</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_statistik" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Data statistik jumlah jamaah/peserta didik yang dilayani;(khusus pengajuan rohaniwan dan tenaga ahli, untuk mahasiswa dan pelajar tidak perlu) Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Paspor</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_paspor" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Foto copy paspor; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Polis Asuransi</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_polis_asuransi" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Foto copy polis asuransi kesehatan Orang Asing untuk jangka waktu masa kunjungan; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Foto</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="foto" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">pas foto terbaru ukuran 4 x 6 cm sebanyak 2 (dua) lembar berwarna latar belakang merah Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Permohonan VVT</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="permohonan_vvt" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Permohonan VTT dari perwakilan Republik Indonesia.(Khusus pengajuan rohaniwan dan tenaga ahli,pelajar dan mahasiswa tidak perlu) Maksimal file 2 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Catatan: Pastikan isian sudah sesuai sebelum melakukan kirim data</p><br>
                    <button class="bg-button" type="submit">Ajukan</button>
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