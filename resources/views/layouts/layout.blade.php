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
    <meta name="description" content="Kementerian Agama Kota Batu">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('bootstrap/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('bootstrap/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('bootstrap/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">@yield('nama_user') </a>
                <a class="navbar-brand hidden" href="./">A</a>
            </div>
            
            @if(auth()->user()->role == 'admin1')
            <!-- MENU ADMIN 1 -->
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{route('datamasuk1')}}"> <i class="menu-icon fa fa-inbox"></i>Data Masuk</a>
                    </li>
                    <!-- <li>
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Pengecekan Data</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-check-square"></i>Data Selesai</a>
                    </li> -->
                    <h3 class="menu-title">Layanan</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Informasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kiblat1')}}">Pengukuran Kiblat</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('slipgaji1')}}">Permohonan Slip Gaji</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{route('buktipajak1')}}">Permohonan Bukti Pajak</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Konsultasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('konsulsyariah1')}}">Konsultasi Syariah</a></li>  -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pendaftaran</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('batalhajireg1')}}">Pembatalan Haji Reg</a></li> -->
                            <!-- <li><i class="fa fa-id-badge"></i><a href="{{route('batalhajiwft1')}}">Pembatalan Haji Wft</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('daftarhaji1')}}">Pendaftaran Haji</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('ikrarmi1')}}">Ikrar Masuk Islam</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('sertifhalal1')}}">Sertifikasi Halal</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihaji1')}}">Pelimpahan Porsi Haji</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihajisakit1')}}">Pelimpahan Porsi Haji Sakit</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pengesahan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('legalisir1')}}">Legalisir Ijazah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ttdsertif1')}}">Tanda Tangan Sertifikat</a></li>  -->
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Perijinan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rptka1')}}">Rencana Penggunaan Tenaga Kerja Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('imtka1')}}">Izin Menggunakan Tenaga Kerja Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('dkpoa1')}}">Dana Kompensasi Pengggunaan Orang Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('vtt1')}}">Visa Tinggal Terbatas</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kitp1')}}">Kartu Izin Tinggal Tetap</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('naturalisasi1')}}">Naturalisasi</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Perizinan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijinpm1')}}">Ijin Penelitian Madrasah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijoptpq1')}}">Ijop TPQ</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopm1')}}">Ijop Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopp1')}}">Ijop Pontren</a></li>  -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Persetujuan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('propbos1')}}">Proposal BOS</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('blankokua1')}}">Permohonan Blanko KUA</a></li>  -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Rekomendasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ripri1')}}">Rekomendasi Ijin Pendirian Rumah Ibadah</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbm1')}}">Rekom Bantuan Masjid</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rskmt1')}}">Rekom Surat Keterangan Majelis Taklim</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpm1')}}">Rekom Pindah Madrasah</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('prsln1')}}">Pengantar Rekom Studi Luar Negeri</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbponpes1')}}">Rekom Bantuan Ponpes/Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbmf1')}}">Rekom Bantuan Madrasah Formal </a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ritas1')}}">Rekom ITAS</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpu1')}}">Rekom Paspor Umroh</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rph1')}}">Rekom Paspor Haji</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ppm1')}}">Piagam Pendirian Masjid</a></li>  -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelayanan Lain yang Diperlukan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('sijazah1')}}">Suket Ijazah</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelayanan yang Diperlukan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('mjamaah1')}}">Mutasi Jamaah</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END OF MENU ADMIN 1 -->
            @endif

            @if(auth()->user()->role == 'admin2')
            <!-- MENU ADMIN 2 -->
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('home2')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3>
                    <!-- /.menu-title -->
                    <li>
                        <a href="{{route('datamasuk2')}}"> <i class="menu-icon fa fa-inbox"></i>Data Masuk</a>
                    </li>
                    <!-- <li>
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Pengecekan Data</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-check-square"></i>Data Selesai</a>
                    </li> -->
                    <h3 class="menu-title">Layanan</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Informasi</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kiblat1')}}">Pengukuran Kiblat</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('slipgaji1')}}">Permohonan Slip Gaji</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{route('buktipajak1')}}">Permohonan Bukti Pajak</a></li>
=======
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kiblat2')}}">Pengukuran Kiblat</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('slipgaji2')}}">Permohonan Slip Gaji</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{route('buktipajak2')}}">Permohonan Bukti Pajak</a></li>
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Konsultasi</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('konsulsyariahk1')}}">Konsultasi Syariah</a></li>  -->
=======
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('konsulsyariah2')}}">Konsultasi Syariah</a></li>  -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pendaftaran</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('batalhajireg1')}}">Pembatalan Haji Reg</a></li> -->
                            <!-- <li><i class="fa fa-id-badge"></i><a href="{{route('batalhajiwft1')}}">Pembatalan Haji Wft</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('daftarhaji1')}}">Pendaftaran Hajik</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('ikrarmi1')}}">Ikrar Masuk Islam</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('sertifhalal11')}}">Sertifikasi Halal</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihaji1')}}">Pelimpahan Porsi Haji</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihajisakit1')}}">Pelimpahan Porsi Haji Sakit</a></li> -->
=======
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('batalhajireg2')}}">Pembatalan Haji Reg</a></li> -->
                            <!-- <li><i class="fa fa-id-badge"></i><a href="{{route('batalhajiwft2')}}">Pembatalan Haji Wft</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('daftarhaji2')}}">Pendaftaran Haji</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('ikrarmi2')}}">Ikrar Masuk Islam</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('sertifhalal2')}}">Sertifikasi Halal</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihaji2')}}">Pelimpahan Porsi Haji</a></li> -->
                            <!-- <li><i class="fa fa-bars"></i><a href="{{route('limpahanporsihajisakit2')}}">Pelimpahan Porsi Haji Sakit</a></li> -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pengesahan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('legalisir1')}}">Legalisir Ijazah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ttdsertif1')}}">Tanda Tangan Sertifikat</a></li>  -->
=======
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('legalisir2')}}">Legalisir Ijazah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ttdsertif2')}}">Tanda Tangan Sertifikat</a></li>  -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Perijinan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rptka1')}}">Rencana Penggunaan Tenaga Kerja Asing</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('imtka1')}}">Izin Menggunakan Tenaga Kerja Asing</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('dkpoa11')}}">Dana Kompensasi Pengggunaan Orang Asing</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('vtt1')}}">Visa Tinggal Terbatas</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kitp1')}}">Kartu Izin Tinggal Tetap</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('naturalisasi1')}}">Naturalisasi</a></li> 
=======
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rptka2')}}">Rencana Penggunaan Tenaga Kerja Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('imtka2')}}">Izin Menggunakan Tenaga Kerja Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('dkpoa2')}}">Dana Kompensasi Pengggunaan Orang Asing</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('vtt2')}}">Visa Tinggal Terbatas</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('kitp2')}}">Kartu Izin Tinggal Tetap</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('naturalisasi2')}}">Naturalisasi</a></li>
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Perizinan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijinpm1')}}">Ijin Penelitian Madrasah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijoptpq1')}}">Ijop TPQ</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopm1')}}">Ijop Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopp1')}}">Ijop Pontren</a></li>  -->
=======
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijinpm2')}}">Ijin Penelitian Madrasah</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijoptpq2')}}">Ijop TPQ</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopm2')}}">Ijop Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ijopp2')}}">Ijop Pontren</a></li>  -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Persetujuan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('propbos1')}}">Proposal BOS</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('blankokua')}}">Permohonan Blanko KUA</a></li>  -->
=======
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('propbos2')}}">Proposal BOS</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('blankokua2')}}">Permohonan Blanko KUA</a></li>  -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Rekomendasi</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ripri1')}}">Rekomendasi Ijin Pendirian Rumah Ibadah</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbm1')}}">Rekom Bantuan Masjid</a></li> 
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rskmt1')}}">Rekom Surat Keterangan Majelis Taklim</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpm1')}}">Rekom Pindah Madrasah</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('prsln1')}}">Pengantar Rekom Studi Luar Negeri</a></li> 
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbponpesp1')}}">Rekom Bantuan Ponpes/Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbmf1')}}">Rekom Bantuan Madrasah Formal </a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ritas1')}}">Rekom ITAS</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpu1')}}">Rekom Paspor Umroh</a></li> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rph1')}}">Rekom Paspor Haji</a></li> 
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ppm1')}}">Piagam Pendirian Masjid</a></li>  -->
=======
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ripri2')}}">Rekomendasi Ijin Pendirian Rumah Ibadah</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbm2')}}">Rekom Bantuan Masjid</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rskmt2')}}">Rekom Surat Keterangan Majelis Taklim</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpm2')}}">Rekom Pindah Madrasah</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('prsln2')}}">Pengantar Rekom Studi Luar Negeri</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbponpes2')}}">Rekom Bantuan Ponpes/Madin</a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rbmf2')}}">Rekom Bantuan Madrasah Formal </a></li>  -->
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ritas2')}}">Rekom ITAS</a></li>  -->
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rpu2')}}">Rekom Paspor Umroh</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('rph2')}}">Rekom Paspor Haji</a></li>
                            <!-- <li><i class="fa fa-puzzle-piece"></i><a href="{{route('ppm2')}}">Piagam Pendirian Masjid</a></li>  -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelayanan Lain yang Diperlukan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('sijazah')}}">Suket Ijazah</a></li> -->
=======
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('sijazah2')}}">Suket Ijazah</a></li> -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelayanan yang Diperlukan</a>
                        <ul class="sub-menu children dropdown-menu">
<<<<<<< HEAD
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('mjamaa1h')}}">Mutasi Jamaah</a></li> -->
=======
                            <!-- <li><i class="fa fa-table"></i><a href="{{route('mjamaah2')}}">Mutasi Jamaah</a></li> -->
>>>>>>> 235357e0d4a35687157d21a53ba143a238317705
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END OF MENU ADMIN 2 -->
            @endif

        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img class="user-avatar rounded-circle" src="{{asset('bootstrap/images/admin.jpg')}}" alt="User Avatar"> -->
                            <i class="fa fa-user"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!-- <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a> -->

                            <a class="nav-link" href="{{ route('change-password') }}"><i class="fa fa-cog"></i> Change Password</a>

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> @yield('page_title')</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">@yield('sub_title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('bootstrap/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/assets/js/main.js')}}"></script>


    <script src="{{asset('bootstrap/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('bootstrap/assets/js/widgets.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('bootstrap/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>