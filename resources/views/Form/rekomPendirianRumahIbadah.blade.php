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
    <title>Rekomendasi Pendirian Rumah Ibadah</title>

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
                    <h2 class="title">Rekomendasi Pendirian Rumah Ibadah</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                        <div class="name">Asal Surat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="asal_surat" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="label--desc">Pengirim Surat</div>
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
                            <div class="name">Surat Permohoan Rekomendasi</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_permohonan_rekom" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat Permohoan Rekomendasi pada KanKemenag Kota Batu. Max file size 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Susunan pengurus rumah ibadah / takmir</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_susunan_pengurus" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Susunan pengurus rumah ibadah / takmir. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat Keterangan Kepemilikan Tanah/ status tanah</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_sk_tanah" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat Keterangan Kepemilikan Tanah/ status tanah. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surat keterangan domisili dari Desa/ Kelurahan</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_sk_domisili" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Surat keterangan domisili dari Desa/ Kelurahan. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Daftar Nama dan KTP pengguna rumah ibadah</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_nama_ktp" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Daftar Nama dan KTP pengguna rumah ibadah paling sedikt 90 orang yang disahkan oleh pejabat setempat sesuai dengan tingkat batas wilayah. Max file size 2 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dukungan masyarakat setempat</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_dukungan" id="file">
                                    <label class="label--file" for="file">Browse</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Dukungan masyarakat setempat paling sedikit 60 orang yang disahkan oleh Lurah atau Kepala Desa. Max file size 2 MB</div>
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