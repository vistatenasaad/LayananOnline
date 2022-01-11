<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Menu', function () {
    return view('menu');
});

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
    return view('Tracking');
});

//Informasi
Route::get('/PengukuranKiblat', 'PengukuranKiblatController@PengukuranKiblat');
Route::post('/PengukuranKiblat/upload', 'PengukuranKiblatController@upload');
Route::get('/PermohonanPajak', 'PermohonanPajakController@PermohonanPajak');
Route::get('/PermohonanSlipGaji', 'PermohonanSlipGajiController@PermohonanSlipGaji');

//Perijinan
Route::get('/PengajuanDKP', 'PengajuanDKPController@PengajuanDKP');
Route::post('/PengajuanDKP/upload', 'PengajuanDKPController@upload');
Route::get('/PengajuanIMTA', 'PengajuanIMTAController@PengajuanIMTA');
Route::get('/PengajuanVVT', 'PengajuanVVTController@pengajuan_vvt');
Route::post('/PengajuanVVT/upload', 'PengajuanVVTController@upload');
Route::get('/PengajuanNaturalisasi', 'PengajuanNaturalisasiController@PengajuanNaturalisasi');
Route::get('/PengajuanKITAB', 'PengajuanKITABController@PengajuanKITAB');
Route::get('/PengajuanRPTKA', 'PengajuanRPTKAController@PengajuanRPTKA');

//Rekomendasi
Route::get('/PindahMadrasah', 'PindahMadrasahController@PindahMadrasahController');
Route::post('/PindahMadrasah/upload', 'PindahMadrasahController@upload');
Route::get('/RekomBantuanMasjid', 'RekomBantuanMasjidController@RekomBantuanMasjid');
Route::post('/RekomBantuanMasjid/upload', 'RekomBantuanMasjidController@upload');
Route::get('/RekomHaji', 'RekomHajiController@RekomHaji');
Route::get('/RekomPendirianRumahIbadah', 'RekomPendirianRumahIbadahController@RekomPendirianRumahIbadah');
Route::get('/RekomSLN', 'RekomSLNController@RekomSLN');
Route::get('/RekomUmroh', 'RekomUmrohController@RekomUmroh');
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