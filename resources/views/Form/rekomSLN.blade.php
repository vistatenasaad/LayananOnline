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
    <title>Rekomendasi Study Luar Negri</title>
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
                    <h2 class="title">Form Pengajuan Pengantar rekomendasi Studi Luar Negeri di Kota Batu</h2>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="/RekomSLN/upload" method="POST">
                    @csrf
                        <div class="form-row">
                        <div class="name">Nama Siswa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama_siswa" placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="name">Asal Madrasah/Pondok</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="asal_madrasah" placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="name">Negara Tujuan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="negara_tujuan" placeholder="Masukkan Nama Anda">
                                </div>
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
                            <div class="name">Surat permohonan ke Kankemenag Kota Batu</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_surat_permohonan" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Surat Permohonan Pengantar Rekom Studi Luar Negeri dari Sekolah Asal ditujukan kepada Kepala Kemenag. Kota Batu ukuran maksimal 2 MB jenis file .jpg, .png, .pdf, .jpeg</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Keterangan Diterima</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_sk_diterima" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Letter of Acceptance (LOA) atau Isy'ar Qobul dari lembaga pendidikan di luar negeri yang dituju, dikecualikan untuk pendaftar ke Ma'had Al Azhar Kairo Mesir dan/atau pendaftara ke lembaga pendidikan di luar negeri yang mempersyaratkan surat rekomendasi studi di luar negeri sebagai bagian dari pendaftaran maksimal file 2 MB dengan ekstensi .jpg, .jpeg. .png, dan .pdf</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Jaminan</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_surat_jaminan" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Surat Jaminan atau Sponsorship yang dikeluarkan oleh individu atau lembaga pendidikan yang menyatakan tanggung jawab mutlak dari penjamin terhadap pemohon selama menempuh pendidikan di luar negeri maksimal file 2 MB dengan jenis file .jpg, .png, .pdf, .jpeg</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Legalisir Ijazah</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_legalisir_ijazah" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">ijazah yang telah dilegalisir dan terdaftar di Kementerian Agama atau Kementerian Pendidikan dan Kebudayaan maksimal file 2 MB dengan jenis file .pdf</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Scan Paspor</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_scan_paspor" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">foto copy paspor maksimal file 2 MB dengan jenis file .pdf</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Biodata pemohon</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_biodata" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Biodata lengkap pemohon yang dilengkapi dengan pas foto 3x4 sesuai format maksimal file 2 MB dengan jenis file .pdf</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pakta Integritas</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_pakta_integritas" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Pakta Integritas Kebangsaan dan Keagamaan yang telah diisi lengkap dan ditandatangani oleh pemohon sesuai dengan format maksimal file 2 MB dengan jenis file .pdf</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Pernyataan Kebenaran Dokumen</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                <input type="file" name="file_pernyataan" placeholder="Choose file" id="file">
                                </div>
                                <div class="label--desc">Surat Pernyataan Kebenaran Dokumen yang telah diisi lengkap dan ditandatangani oleh pemohon sesuai dengan format, maksimal file 2 MB dengan jenis file .pdf</div>
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