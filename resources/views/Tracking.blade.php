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
    <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
    <title>Form Pengajuan DKP Orang Asing</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{!! asset('assets/css/main.css') !!}" rel="stylesheet" media="all">
    <style type="text/css">
        html,
        body {
            height: 100%;
        }

        .bg-utama {
            background-color: #1ca223
        }

        .bg-button {
            background-color: #1ca223;
            /* Hijau */
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
                    <h2 class="title">Tracking</h2>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @csrf
                    <div class="form-row">
                        <h3>Pelacakan status pengajuan.</h3>
                    </div>
                    <div class="form-row">
                        <div>Untuk melacak status pengajuan, masukkan Kode Tracking Pengajuan yang telah dikirmkan melalui email / Whatsapp.
                        </div>
                    </div>
                    <div class="card-footer">
                        <form enctype="multipart/form-data" action="/tracking/search" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="name">Kode Tracking</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="text" name="id" required placeholder="Masukkan Kode Tracking">
                                    </div>
                                    <div class="label--desc">
                                        <button class="bg-button" type="submit">Lacak</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        @if($data != null)
                        @foreach($data as $d)
                        <?php
                        $status = "-";
                        if ($d->status == "1") {
                            $status = " berhasil diupload";
                        } else if ($d->status == "2") {
                            $status = " sedang diperiksa oleh admin";
                        } else if ($d->status == "3") {
                            $status = " SELESAI";
                        } else if ($d->status == "11") {
                            $status = " DITOLAK karena tidak lengkap";
                        } else {
                            $status = " DITOLAK karena terdapat kesalahan";
                        }
                        ?>
                        <div class="form-row">
                            <p>Status pengajuan dengan kode  "<code>{{$d->id}}</code>" </p>
                            <p> <strong> {{$status}}</strong></p>
                        </div>
                        @endforeach
                        @endif
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