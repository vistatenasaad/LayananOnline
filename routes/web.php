<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('menu');
});

// Route::get('/Cetak', function () {
//     return view('cetakkemenag');
// });

Route::get('/Cetak', 'CetakController@cetak');

Route::get('/Menu', function () {
    return view('menu');
});

// Route::get('/COBA', function () {
//     return view('Form.Tolak_notify');
// });

Route::get('/informasi', function () {
    return view('Informasi');
});

Route::get('/konsultasi', function () {
    return view('Konsultasi');
});

Route::get('/pendaftaran', function () {
    return view('Pendaftaran');
});

Route::get('/pengesahan', function () {
    return view('Pengesahan');
});

Route::get('/perijinan', function () {
    return view('Perijinan');
});

Route::get('/perizinan', function () {
    return view('Perizinan');
});

Route::get('/persetujuan', function () {
    return view('Persetujuan');
});

Route::get('/rekomendasi', function () {
    return view('Rekomendasi');
});

Route::get('/pelayananlain', function () {
    return view('PelayananLainnya');
});

Route::get('/pelayanan', function () {
    return view('Pelayanan');
});

Route::get('/tracking', function () {
    $data = null;
    return view('Tracking', ['data' => $data]);
});

Route::post('/tracking/search', 'DetailController@tracking');

//Informasi
Route::get('/PengukuranKiblat', 'PengukuranKiblatController@PengukuranKiblat');
Route::post('/PengukuranKiblat/upload', 'PengukuranKiblatController@upload');
Route::get('/PengukuranKiblat_sm', 'PengukuranKiblatController@PengukuranKiblat_sm'); //download
Route::get('/PengukuranKiblat_sm/cetak_pdf/{id}', 'PengukuranKiblatController@cetak_pdf'); //pdf

Route::get('/PermohonanPajak', 'PermohonanPajakController@PermohonanPajak');
Route::get('/PermohonanSlipGaji', 'PermohonanSlipGajiController@PermohonanSlipGaji');

//Perijinan
Route::get('/PengajuanDKP', 'PengajuanDKPController@PengajuanDKP');
Route::post('/PengajuanDKP/upload', 'PengajuanDKPController@upload');
Route::get('/PengajuanDKP_sm', 'PengajuanDKPController@PengajuanDKP_sm'); //download
Route::get('/PengajuanDKP_sm/cetak_pdf/{id}', 'PengajuanDKPController@cetak_pdf'); //pdf

Route::get('/PengajuanIMTA', 'PengajuanIMTAController@PengajuanIMTA');
Route::post('/PengajuanIMTA/upload', 'PengajuanIMTAController@upload');
Route::get('/PengajuanIMTA_sm', 'PengajuanIMTAController@PengajuanIMTA_sm'); //download
Route::get('/PengajuanIMTA_sm/cetak_pdf/{id}', 'PengajuanIMTAController@cetak_pdf'); //pdf

Route::get('/PengajuanVVT', 'PengajuanVVTController@pengajuan_vvt');
Route::post('/PengajuanVVT/upload', 'PengajuanVVTController@upload');
Route::get('/PengajuanVVT_sm', 'PengajuanVVTController@PengajuanIMTA_sm'); //download
Route::get('/PengajuanVVT_sm/cetak_pdf/{id}', 'PengajuanVVTController@cetak_pdf'); //pdf

Route::get('/PengajuanNaturalisasi', 'PengajuanNaturalisasiController@PengajuanNaturalisasi');
Route::post('/PengajuanNaturalisasi/upload', 'PengajuanNaturalisasiController@upload');
Route::get('/PengajuanNaturalisasi_sm', 'PengajuanNaturalisasiController@PengajuanNaturalisasi_sm'); //download
Route::get('/PengajuanNaturalisasi_sm/cetak_pdf/{id}', 'PengajuanNaturalisasiController@cetak_pdf'); //pdf

Route::get('/PengajuanKITAB', 'PengajuanKITABController@PengajuanKITAB');
Route::post('/PengajuanKITAB/upload', 'PengajuanKITABController@upload');
Route::get('/PengajuanKITAB_sm', 'PengajuanKITABController@PengajuanKITAB_sm'); //download
Route::get('/PengajuanKITAB_sm/cetak_pdf/{id}', 'PengajuanKITABController@cetak_pdf'); //pdf

Route::get('/PengajuanRPTKA', 'PengajuanRPTKAController@PengajuanRPTKA');
Route::post('/PengajuanRPTKA/upload', 'PengajuanRPTKAController@upload');
Route::get('/PengajuanRPTKA_sm', 'PengajuanRPTKAController@PengajuanRPTKA_sm'); //download
Route::get('/PengajuanRPTKA_sm/cetak_pdf/{id}', 'PengajuanRPTKAController@cetak_pdf'); //pdf

//Rekomendasi
Route::get('/PindahMadrasah', 'PindahMadrasahController@PindahMadrasahController');
Route::post('/PindahMadrasah/upload', 'PindahMadrasahController@upload');
Route::get('/PindahMadrasah_sm', 'PindahMadrasahController@PindahMadrasah_sm'); //download
Route::get('/PindahMadrasah_sm/cetak_pdf/{id}', 'PindahMadrasahController@cetak_pdf'); //pdf

Route::get('/RekomBantuanMasjid', 'RekomBantuanMasjidController@RekomBantuanMasjid');
Route::post('RekomBantuanMasjid/upload', 'RekomBantuanMasjidController@upload');
Route::get('/RekomBantuanMasjid_sm', 'RekomBantuanMasjidController@PindahMadrasah_sm'); //download
Route::get('/RekomBantuanMasjid_sm/cetak_pdf/{id}', 'RekomBantuanMasjidController@cetak_pdf'); //pdf

Route::get('/rekomHaji', 'RekomHajiController@RekomHaji');
Route::post('/rekomHaji/upload', 'RekomHajiController@upload');
Route::get('/rekomHaji_sm', 'RekomHajiController@rekomHaji_sm'); //download
Route::get('/rekomHaji_sm/cetak_pdf/{id}', 'RekomHajiController@cetak_pdf'); //pdf

Route::get('/rekomPendirianRumahIbadah', 'RekomPendirianRumahIbadahController@RekomPendirianRumahIbadah');
Route::post('/rekomPendirianRumahIbadah/upload', 'RekomPendirianRumahIbadahController@upload');
Route::get('/rekomPendirianRumahIbadah_sm', 'RekomPendirianRumahIbadahController@rekomPendirianRumahIbadah_sm'); //download
Route::get('/rekomPendirianRumahIbadah_sm/cetak_pdf/{id}', 'RekomPendirianRumahIbadahController@cetak_pdf'); //pdf

Route::get('/rekomSLN', 'RekomSLNController@RekomSLN');
Route::post('/rekomSLN/upload', 'RekomSLNController@upload');
Route::get('/rekomSLN_sm', 'RekomSLNController@rekomSLN_sm'); //download
Route::get('/rekomSLN_sm/cetak_pdf/{id}', 'RekomSLNController@cetak_pdf'); //pdf

Route::get('/rekomUmroh', 'RekomUmrohController@RekomUmroh');
Route::post('/rekomUmroh/upload', 'RekomUmrohController@upload');
Route::get('/rekomUmrooh_sm', 'RekomUmrohController@rekomUmroh_sm'); //download
Route::get('/rekomUmroh_sm/cetak_pdf/{id}', 'RekomUmrohController@cetak_pdf'); //pdf
//offline
Route::get('/RekomSuratKeteranganMajelisTaklim', 'RekomSuratKeteranganMajelisTaklimController@RekomSuratKeteranganMajelisTaklim');
Route::get('/RekomBantuanPonpesMadin', 'RekomBantuanPonpesMadinController@RekomBantuanPonpesMadin');
Route::get('/RekomBantuanMadrasahFormal', 'RekomBantuanMadrasahFormalController@RekomBantuanMadrasahFormal');
Route::get('/RekomITAS', 'RekomITASController@RekomITAS');
Route::get('/PiagamPendirianMasjid', 'PiagamPendirianMasjidrController@PiagamPendirianMasjid');

//Konsultasi
Route::get('/KonsulasiSyariahController', 'KonsulasiSyariahController@KonsulasiSyariah');

//Pendaftaran
Route::get('/PembatalanHajiReg', 'PembatalanHajiRegController@PembatalanHajiReg');
Route::get('/PembatalanHajiSakit', 'PembatalanHajiSakitController@PembatalanHajiSakit');
Route::get('/PendaftaranHaji', 'PendaftaranHajiController@PendaftaranHaji');
Route::get('/IkrarMasukIslam', 'IkrarMasukIslamController@IkrarMasukIslam');
Route::get('/SertifikasiHalal', 'SertifikasiHalalController@SertifikasiHalal');
Route::get('/PelimpahanPorsiHajiController', 'PelimpahanPorsiHajiControllerController@PelimpahanPorsiHaji');
Route::get('/PelimpahanPorsiHajiSakitController', 'PelimpahanPorsiHajiSakitControllerController@PelimpahanPorsiHajiSakit');

//Pengesahan
Route::get('/LegalisirIjazah', 'LegalisirIjazahController@LegalisirIjazah');
Route::get('/TandaTanganSertifikat', 'TandaTanganSertifikatController@TandaTanganSertifikat');

//Perizinan
Route::get('/IjinPenelitianMadrasah', 'IjinPenelitianMadrasahController@IjinPenelitianMadrasah');
Route::get('/IjopTPQ', 'IjopTPQController@IjopTPQ');
Route::get('/IjopMadin', 'IjopMadinController@IjopMadin');
Route::get('/IjopPontren', 'IjopPontrenController@IjopPontren');

//Persetujuan
Route::get('/ProposalBOS', 'ProposalBOSController@ProposalBOS');
Route::get('/PermohonanBlankoKUA', 'PermohonanBlankoKUAController@PermohonanBlankoKUA');

//Pelayanan Lain yang Diperlukan
Route::get('/SuketIjazah', 'SuketIjazahController@SuketIjazah');

//Pelayanan Yang diperlukan
Route::get('/MutasiJamaah', 'MutasiJamaahController@MutasiJamaah');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home1', 'HomeController@home1')->name('home1')->middleware('auth');
Route::get('/home2', 'HomeController@home2')->name('home2')->middleware('auth');

//ADMIN 1
Route::get('/datamasuk', 'Admin1Controller@datamasuk1')->name('datamasuk1')->middleware('auth');
Route::get('/cekdata1', 'Admin1Controller@cekdata1')->name('cekdata1')->middleware('auth');
Route::get('/dataselesai1', 'Admin1Controller@dataselesai1')->name('dataselesai1')->middleware('auth');
Route::get('/kiblat1', 'Admin1Controller@kiblat1')->name('kiblat1')->middleware('auth');
Route::get('/slipgaji1', 'Admin1Controller@slipgaji1')->name('slipgaji1')->middleware('auth');
Route::get('/buktipajak1', 'Admin1Controller@buktipajak1')->name('buktipajak1')->middleware('auth');
Route::get('/konsulsyariah1', 'Admin1Controller@konsulsyariah1')->name('konsulsyariah1')->middleware('auth');
Route::get('/batalhajireg1', 'Admin1Controller@batalhajireg1')->name('batalhajireg1')->middleware('auth');
Route::get('/batalhajiwft1', 'Admin1Controller@batalhajiwft1')->name('batalhajiwft1')->middleware('auth');
Route::get('/daftarhaji1', 'Admin1Controller@daftarhaji1')->name('daftarhaji1')->middleware('auth');
Route::get('/ikrarmi1', 'Admin1Controller@ikrarmi1')->name('ikrarmi1')->middleware('auth');
Route::get('/sertifhalal1', 'Admin1Controller@sertifhalal1')->name('sertifhalal1')->middleware('auth');
Route::get('/limpahanporsihaji1', 'Admin1Controller@limpahanporsihaji1')->name('limpahanporsihaji1')->middleware('auth');
Route::get('/limpahanporsihajisakit1', 'Admin1Controller@limpahanporsihajisakit1')->name('limpahanporsihajisakit1')->middleware('auth');
Route::get('/legalisir1', 'Admin1Controller@legalisir1')->name('legalisir1')->middleware('auth');
Route::get('/ttdsertif1', 'Admin1Controller@ttdsertif1')->name('ttdsertif1')->middleware('auth');
Route::get('/rptka1', 'Admin1Controller@rptka1')->name('rptka1')->middleware('auth');
Route::get('/imtka1', 'Admin1Controller@imtka1')->name('imtka1')->middleware('auth');
Route::get('/dkpoa1', 'Admin1Controller@dkpoa1')->name('dkpoa1')->middleware('auth');
Route::get('/vtt1', 'Admin1Controller@vtt1')->name('vtt1')->middleware('auth');
Route::get('/kitp1', 'Admin1Controller@kitp1')->name('kitp1')->middleware('auth');
Route::get('/naturalisasi1', 'Admin1Controller@naturalisasi1')->name('naturalisasi1')->middleware('auth');
Route::get('/ijinpm1', 'Admin1Controller@ijinpm1')->name('ijinpm1')->middleware('auth');
Route::get('/ijoptpq1', 'Admin1Controller@ijoptpq1')->name('ijoptpq1')->middleware('auth');
Route::get('/ijopm1', 'Admin1Controller@ijopm1')->name('ijopm1')->middleware('auth');
Route::get('/ijopp1', 'Admin1Controller@dkpoa1')->name('ijopp1')->middleware('auth');
Route::get('/propbos1', 'Admin1Controller@propbos1')->name('propbos1')->middleware('auth');
Route::get('/blankokua1', 'Admin1Controller@blankokua1')->name('blankokua1')->middleware('auth');
Route::get('/ripri1', 'Admin1Controller@ripri1')->name('ripri1')->middleware('auth');
Route::get('/rbm1', 'Admin1Controller@rbm1')->name('rbm1')->middleware('auth');
Route::get('/rskmt1', 'Admin1Controller@rskmt1')->name('rskmt1')->middleware('auth');
Route::get('/rpm1', 'Admin1Controller@rpm1')->name('rpm1')->middleware('auth');
Route::get('/prsln1', 'Admin1Controller@prsln1')->name('prsln1')->middleware('auth');
Route::get('/rbponpes1', 'Admin1Controller@rbponpes1')->name('rbponpes1')->middleware('auth');
Route::get('/rbmf1', 'Admin1Controller@rbmf1')->name('rbmf1')->middleware('auth');
Route::get('/ritas1', 'Admin1Controller@ritas1')->name('ritas1')->middleware('auth');
Route::get('/rpu1', 'Admin1Controller@rpu1')->name('rpu1')->middleware('auth');
Route::get('/rph1', 'Admin1Controller@rph1')->name('rph1')->middleware('auth');
Route::get('/ppm1', 'Admin1Controller@ppm1')->name('ppm1')->middleware('auth');
Route::get('/sijazah1', 'Admin1Controller@sijazah1')->name('sijazah1')->middleware('auth');
Route::get('/mjamaah1', 'Admin1Controller@mjamaah1')->name('mjamaah1')->middleware('auth');

//ADMIN 2
Route::get('/datamasuk2', 'Admin2Controller@datamasuk2')->name('datamasuk2')->middleware('auth');
Route::get('/cekdata2', 'Admin2Controller@cekdata2')->name('cekdata2')->middleware('auth');
Route::get('/dataselesai2', 'Admin2Controller@dataselesai2')->name('dataselesai2')->middleware('auth');
Route::get('/kiblat2', 'Admin2Controller@kiblat2')->name('kiblat2')->middleware('auth');
Route::get('/slipgaji2', 'Admin2Controller@slipgaji2')->name('slipgaji2')->middleware('auth');
Route::get('/buktipajak2', 'Admin2Controller@buktipajak2')->name('buktipajak2')->middleware('auth');
Route::get('/konsulsyariah2', 'Admin2Controller@konsulsyariah2')->name('konsulsyariah2')->middleware('auth');
Route::get('/batalhajireg2', 'Admin2Controller@batalhajireg2')->name('batalhajireg2')->middleware('auth');
Route::get('/batalhajiwft2', 'Admin2Controller@batalhajiwft2')->name('batalhajiwft2')->middleware('auth');
Route::get('/daftarhaji2', 'Admin2Controller@daftarhaji2')->name('daftarhaji2')->middleware('auth');
Route::get('/ikrarmi2', 'Admin2Controller@ikrarmi2')->name('ikrarmi2')->middleware('auth');
Route::get('/sertifhalal2', 'Admin2Controller@sertifhalal2')->name('sertifhalal2')->middleware('auth');
Route::get('/limpahanporsihaji2', 'Admin2Controller@limpahanporsihaji2')->name('limpahanporsihaji2')->middleware('auth');
Route::get('/limpahanporsihajisakit2', 'Admin2Controller@limpahanporsihajisakit2')->name('limpahanporsihajisakit2')->middleware('auth');
Route::get('/legalisir2', 'Admin2Controller@legalisir2')->name('legalisir2')->middleware('auth');
Route::get('/ttdsertif2', 'Admin2Controller@ttdsertif2')->name('ttdsertif2')->middleware('auth');
Route::get('/rptka2', 'Admin2Controller@rptka2')->name('rptka2')->middleware('auth');
Route::get('/imtka2', 'Admin2Controller@imtka2')->name('imtka2')->middleware('auth');
Route::get('/dkpoa2', 'Admin2Controller@dkpoa2')->name('dkpoa2')->middleware('auth');
Route::get('/vtt2', 'Admin2Controller@vtt2')->name('vtt2')->middleware('auth');
Route::get('/kitp2', 'Admin2Controller@kitp2')->name('kitp2')->middleware('auth');
Route::get('/naturalisasi2', 'Admin2Controller@naturalisasi2')->name('naturalisasi2')->middleware('auth');
Route::get('/ijinpm2', 'Admin2Controller@ijinpm2')->name('ijinpm2')->middleware('auth');
Route::get('/ijoptpq2', 'Admin2Controller@ijoptpq2')->name('ijoptpq2')->middleware('auth');
Route::get('/ijopm2', 'Admin2Controller@ijopm2')->name('ijopm2')->middleware('auth');
Route::get('/ijopp2', 'Admin2Controller@dkpoa2')->name('ijopp2')->middleware('auth');
Route::get('/propbos2', 'Admin2Controller@propbos2')->name('propbos2')->middleware('auth');
Route::get('/blankokua2', 'Admin2Controller@blankokua2')->name('blankokua2')->middleware('auth');
Route::get('/ripri2', 'Admin2Controller@ripri2')->name('ripri2')->middleware('auth');
Route::get('/rbm2', 'Admin2Controller@rbm2')->name('rbm2')->middleware('auth');
Route::get('/rskmt2', 'Admin2Controller@rskmt2')->name('rskmt2')->middleware('auth');
Route::get('/rpm2', 'Admin2Controller@rpm2')->name('rpm2')->middleware('auth');
Route::get('/prsln2', 'Admin2Controller@prsln2')->name('prsln2')->middleware('auth');
Route::get('/rbponpes2', 'Admin2Controller@rbponpes2')->name('rbponpes2')->middleware('auth');
Route::get('/rbmf2', 'Admin2Controller@rbmf2')->name('rbmf2')->middleware('auth');
Route::get('/ritas2', 'Admin2Controller@ritas2')->name('ritas2')->middleware('auth');
Route::get('/rpu2', 'Admin2Controller@rpu2')->name('rpu2')->middleware('auth');
Route::get('/rph2', 'Admin2Controller@rph2')->name('rph2')->middleware('auth');
Route::get('/ppm2', 'Admin2Controller@ppm2')->name('ppm2')->middleware('auth');
Route::get('/sijazah2', 'Admin2Controller@sijazah2')->name('sijazah2')->middleware('auth');
Route::get('/mjamaah2', 'Admin2Controller@mjamaah2')->name('mjamaah2')->middleware('auth');

// DETAIL

Route::get('/histori/{layanan}/{id}', 'DetailController@histori')->name('histori')->middleware('auth');
Route::get('/detail/rekom_bantuan_masjid/{id}', 'DetailController@detail1bantuanmasjid')->middleware('auth');
Route::get('/detail/pengajuan_d_k_p/{id}', 'DetailController@detail1dkp')->middleware('auth');
Route::get('/detail/rekom_haji/{id}', 'DetailController@detail1haji')->middleware('auth');
Route::get('/detail/pengajuan_imta/{id}', 'DetailController@detail1imta')->middleware('auth');
Route::get('/detail/pengajuan_naturalisasi/{id}', 'DetailController@detail1naturalisasi')->middleware('auth');
Route::get('/detail/permohonan_pajak/{id}', 'DetailController@detailpajak')->middleware('auth');
Route::get('/detail/rekom_pendirian_ri/{id}', 'DetailController@detail1pendirianri')->middleware('auth');
Route::get('/detail/pengajuan_kitab/{id}', 'DetailController@detail1pengajuankitab')->middleware('auth');
Route::get('/detail/pengukuran_kiblat/{id}', 'DetailController@detail1pengukurankiblat')->middleware('auth');
Route::get('/detail/pindah_madrasah/{id}', 'DetailController@detail1pindahmadrasah')->middleware('auth');
Route::get('/detail/rekom_sln/{id}', 'DetailController@detail1rekomsln')->middleware('auth');
Route::get('/detail/pengajuan_rptka/{id}', 'DetailController@detail1rptka')->middleware('auth');
Route::get('/detail/permohonan_slipgaji/{id}', 'DetailController@detail1slipgaji')->middleware('auth');
Route::get('/detail/rekom_umroh/{id}', 'DetailController@detail1umroh')->middleware('auth');
Route::get('/detail/pengajuan_vvt/{id}', 'DetailController@detail1vvt')->middleware('auth');


//

Route::get('/detail/{id}', 'DetailController@detail1')->name('detail1')->middleware('auth');
Route::get('/verif/{id}', 'DetailController@verif1')->name('verif1')->middleware('auth');

Route::get('/detail2/{id}', 'DetailController@detail2')->name('detail2')->middleware('auth');
Route::get('/verif2/{id}', 'DetailController@verif2')->name('verif2')->middleware('auth');

Route::get('/tolak1/{id}', 'DetailController@tolak1')->name('tolak1')->middleware('auth');
Route::post('/subtolak1', 'DetailController@prosestolak1')->name('subtolak1')->middleware('auth');
Route::get('/tolak2/{id}', 'DetailController@tolak2')->name('tolak2')->middleware('auth');
Route::post('/subtolak2', 'DetailController@prosestolak2')->name('subtolak2')->middleware('auth');

Route::get('change-password', 'ChangePasswordController@index')->name('change-password')->middleware('auth');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password')->middleware('auth');

Route::get('adduser', 'UserController@adduser')->name('adduser')->middleware('auth');
Route::post('saveuser', 'UserController@saveuser')->name('saveuser')->middleware('auth');
Route::get('edituser/{id}', 'UserController@edituser')->name('edituser')->middleware('auth');
Route::post('updateuser/{id}', 'UserController@updateuser')->name('updateuser')->middleware('auth');
Route::get('deleteuser/{id}', 'UserController@deleteuser')->name('deleteuser')->middleware('auth');
