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
    <title>Form Pengajuan Naturalisasi</title>

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
                    <h2 class="title">Form Pengajuan Naturalisasi</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
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
                            <div class="name">File Persetujuan</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_persetujuan" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat persetujuan dari Pengguna Orang Asing; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Akte kelahiran</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_akte_kelahiran" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Akte kelahiran/ kenal lahir yang menunjukkan bahwa Orang Asing telah berusia 21 (dua puluh satu) tahun; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Pernyataan Bahasa</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_pernyataan_bahasa" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat pernyataan Orang Asing dapat berbahasa Indonesia; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File SKKB/ SKCK</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_skkb_skck" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">surat keterangan kelakuan baik dari kepolisian; Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File KITAB</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_kitab" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">foto copy KITAP; Maksimal file 2 MB</div>
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
                                <div class="label--desc">Foto copy ijasah/lisensi pemohon sebagai tenaga ahli di bidang agama/ rohaniwan;Maksimal file 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Jaminan</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_jaminan" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat jaminan dari Pemberi Kerja Orang Asing bahwa Orang Asing tidak akan terlantar di Indonesia; Maksimal file 2 MB</div>
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
                            <div class="name">File Akte kelahiran</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="akta_kelahiran" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Akte kelahiran/ kenal lahir yang menunjukkan bahwa Orang Asing telah berusia 21 (dua puluh satu) tahun; Maksimal file 2 MB</div>
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