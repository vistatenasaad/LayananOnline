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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('menu');
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
Route::post('/PengajuanIMTA/upload', 'PengajuanIMTAController@upload');
Route::get('/PengajuanVVT', 'PengajuanVVTController@pengajuan_vvt');
Route::post('/PengajuanVVT/upload', 'PengajuanVVTController@upload');
Route::get('/PengajuanNaturalisasi', 'PengajuanNaturalisasiController@PengajuanNaturalisasi');
Route::post('/PengajuanNaturalisasi/upload', 'PengajuanNaturalisasiController@upload');
Route::get('/PengajuanKITAB', 'PengajuanKITABController@PengajuanKITAB');
Route::post('/PengajuanKITAB/upload', 'PengajuanKITABController@upload');
Route::get('/PengajuanRPTKA', 'PengajuanRPTKAController@PengajuanRPTKA');
Route::post('/PengajuanRPTKA/upload', 'PengajuanRPTKAController@upload');

//Rekomendasi
Route::get('/PindahMadrasah', 'PindahMadrasahController@PindahMadrasahController');
Route::post('/PindahMadrasah/upload', 'PindahMadrasahController@upload');
Route::get('/RekomBantuanMasjid', 'RekomBantuanMasjidController@RekomBantuanMasjid');
Route::post('/RekomBantuanMasjid/upload', 'RekomBantuanMasjidController@upload');
Route::get('/RekomHaji', 'RekomHajiController@RekomHaji');
Route::post('/RekomHaji/upload', 'RekomHajiController@upload');
Route::get('/RekomPendirianRumahIbadah', 'RekomPendirianRumahIbadahController@RekomPendirianRumahIbadah');
Route::post('/RekomPendirianRumahIbadah/upload', 'RekomPendirianRumahIbadahController@upload');
Route::get('/RekomSLN', 'RekomSLNController@RekomSLN');
Route::post('/RekomSLN/upload', 'RekomSLNController@upload');
Route::get('/RekomUmroh', 'RekomUmrohController@RekomUmroh');
Route::post('/RekomUmroh/upload', 'RekomUmrohController@upload');
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
Route::get('/datamasuk', 'Admin1Controller@datamasuk1')->name('datamasuk1');
Route::get('/cekdata1', 'Admin1Controller@cekdata1')->name('cekdata1');
Route::get('/dataselesai1', 'Admin1Controller@dataselesai1')->name('dataselesai1');
Route::get('/kiblat1', 'Admin1Controller@kiblat1')->name('kiblat1');
Route::get('/slipgaji1', 'Admin1Controller@slipgaji1')->name('slipgaji1');
Route::get('/buktipajak1', 'Admin1Controller@buktipajak1')->name('buktipajak1');
Route::get('/konsulsyariah1', 'Admin1Controller@konsulsyariah1')->name('konsulsyariah1');
Route::get('/batalhajireg1', 'Admin1Controller@batalhajireg1')->name('batalhajireg1');
Route::get('/batalhajiwft1', 'Admin1Controller@batalhajiwft1')->name('batalhajiwft1');
Route::get('/daftarhaji1', 'Admin1Controller@daftarhaji1')->name('daftarhaji1');
Route::get('/ikrarmi1', 'Admin1Controller@ikrarmi1')->name('ikrarmi1');
Route::get('/sertifhalal1', 'Admin1Controller@sertifhalal1')->name('sertifhalal1');
Route::get('/limpahanporsihaji1', 'Admin1Controller@limpahanporsihaji1')->name('limpahanporsihaji1');
Route::get('/limpahanporsihajisakit1', 'Admin1Controller@limpahanporsihajisakit1')->name('limpahanporsihajisakit1');
Route::get('/legalisir1', 'Admin1Controller@legalisir1')->name('legalisir1');
Route::get('/ttdsertif1', 'Admin1Controller@ttdsertif1')->name('ttdsertif1');
Route::get('/rptka1', 'Admin1Controller@rptka1')->name('rptka1');
Route::get('/imtka1', 'Admin1Controller@imtka1')->name('imtka1');
Route::get('/dkpoa1', 'Admin1Controller@dkpoa1')->name('dkpoa1');
Route::get('/vtt1', 'Admin1Controller@vtt1')->name('vtt1');
Route::get('/kitp1', 'Admin1Controller@kitp1')->name('kitp1');
Route::get('/naturalisasi1', 'Admin1Controller@naturalisasi1')->name('naturalisasi1');
Route::get('/ijinpm1', 'Admin1Controller@ijinpm1')->name('ijinpm1');
Route::get('/ijoptpq1', 'Admin1Controller@ijoptpq1')->name('ijoptpq1');
Route::get('/ijopm1', 'Admin1Controller@ijopm1')->name('ijopm1');
Route::get('/ijopp1', 'Admin1Controller@dkpoa1')->name('ijopp1');
Route::get('/propbos1', 'Admin1Controller@propbos1')->name('propbos1');
Route::get('/blankokua1', 'Admin1Controller@blankokua1')->name('blankokua1');
Route::get('/ripri1', 'Admin1Controller@ripri1')->name('ripri1');
Route::get('/rbm1', 'Admin1Controller@rbm1')->name('rbm1');
Route::get('/rskmt1', 'Admin1Controller@rskmt1')->name('rskmt1');
Route::get('/rpm1', 'Admin1Controller@rpm1')->name('rpm1');
Route::get('/prsln1', 'Admin1Controller@prsln1')->name('prsln1');
Route::get('/rbponpes1', 'Admin1Controller@rbponpes1')->name('rbponpes1');
Route::get('/rbmf1', 'Admin1Controller@rbmf1')->name('rbmf1');
Route::get('/ritas1', 'Admin1Controller@ritas1')->name('ritas1');
Route::get('/rpu1', 'Admin1Controller@rpu1')->name('rpu1');
Route::get('/rph1', 'Admin1Controller@rph1')->name('rph1');
Route::get('/ppm1', 'Admin1Controller@ppm1')->name('ppm1');
Route::get('/sijazah1', 'Admin1Controller@sijazah1')->name('sijazah1');
Route::get('/mjamaa1h', 'Admin1Controller@mjamaa1h')->name('mjamaa1h');

// DETAIL

Route::get('/detail/{id}', 'DetailController@detail1')->name('detail1');