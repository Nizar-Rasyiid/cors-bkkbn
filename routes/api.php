<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
$url = "App\Http\Controllers";
// use App\Http\Controllers\VuserController;
// use App\Http\Controllers\UserAccessSurveyController;
// use App\Http\Controllers\ProvinsiController;
// use App\Http\Controllers\KabupatenController;
// use App\Http\Controllers\KecamatanController;
// use App\Http\Controllers\KelurahanController;
// use App\Http\Controllers\RtController;
// use App\Http\Controllers\RwController;
// use App\Http\Controllers\SettingController;
// use App\Http\Controllers\KelompokDataController;
// use App\Http\Controllers\TargetKkController;
// use App\Http\Controllers\LaporanSensusController;
// use App\Http\Controllers\FormKKController;
// use App\Http\Controllers\KBController;
// use App\Http\Controllers\RealisasiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User Access Survey
Route::get('/user-access-survey/get','App\Http\Controllers\UserAccessSurveyController@getUAS');
Route::post('/user-access-survey/showUAS','App\Http\Controllers\UserAccessSurveyController@showUAS');
Route::post('/user-access-survey/store','App\Http\Controllers\UserAccessSurveyController@storeUAS');
Route::post('/user-access-survey/update','App\Http\Controllers\UserAccessSurveyController@updateUAS');
Route::post('/user-access-survey/delete','App\Http\Controllers\UserAccessSurveyController@deleteUAS');
Route::post('/user-access-survey/delete','App\Http\Controllers\UserAccessSurveyController@deleteUA');

// V user
  Route::post('/vuser/showUser',   'App\Http\Controllers\VuserController@showUser');
  Route::get('/vuser/getUser',  'App\Http\Controllers\VuserController@getUser');
  Route::post('/vuser/storeUser',  'App\Http\Controllers\VuserController@storeUser');
  Route::post('/vuser/updateUser',  'App\Http\Controllers\VuserController@updateUser');
  Route::post('/vuser/ubahPassword',  'App\Http\Controllers\VuserController@ubahPassword');
  Route::post('/vuser/deleteUser',  'App\Http\Controllers\VuserController@deleteUser');

//   Provinsi
  Route::get('/provinsi/getProvinsi', 'App\Http\Controllers\ProvinsiController@getProv');
  Route::post('/provinsi/storeProv',   'App\Http\Controllers\ProvinsiController@storeProv');
  Route::post('/provinsi/updateProv',   'App\Http\Controllers\ProvinsiController@updateProv');
  Route::post('/provinsi/deleteProv', 'App\Http\Controllers\ProvinsiController@deleteProv');
  Route::get('/provinsi/laporanProv',   'App\Http\Controllers\ProvinsiController@laporanProv');
  Route::post('/provinsi/laporanPerProv',   'App\Http\Controllers\ProvinsiController@laporanPerProv');

//  Kabupaten
  Route::post('/kabupaten/showKabupaten','App\Http\Controllers\KabupatenController@showKab');
  Route::post('/kabupaten/showsKabupaten','App\Http\Controllers\KabupatenController@showKabs');
  Route::get('/kabupaten/getKabupaten','App\Http\Controllers\KabupatenController@getKab');
  Route::post('/kabupaten/storeKab',   'App\Http\Controllers\KabupatenController@storeKab');
  Route::post('/kabupaten/deleteKab', 'App\Http\Controllers\KabupatenController@deleteKab');
  Route::post('/kabupaten/updateKab',   'App\Http\Controllers\KabupatenController@updateKab');
  Route::get('/kabupaten/laporanKab', 'App\Http\Controllers\KabupatenController@laporanKab'); 
  Route::post('/kabupaten/show-per-kab', 'App\Http\Controllers\KabupatenController@showPerKab'); 

//  Kecamatann
  Route::post('/kecamatan/showKecamatan','App\Http\Controllers\KecamatanController@showKec');
  Route::post('/kecamatan/showKecamatans','App\Http\Controllers\KecamatanController@showKecs');
  Route::get('/kecamatan/getKecamatan','App\Http\Controllers\KecamatanController@getKec');
  Route::post('/kecamatan/storeKec',   'App\Http\Controllers\KecamatanController@storeKec');
  Route::post('/kecamatan/deleteKec', 'App\Http\Controllers\KecamatanController@deleteKec');
  Route::post('/kecamatan/updateKec',   'App\Http\Controllers\KecamatanController@updateKec');
  Route::get('/kecamatan/laporanKec', 'App\Http\Controllers\KecamatanController@laporanKec'); 
  Route::post('/kecamatan/show-per-kec', 'App\Http\Controllers\KecamatanController@ShowPerKec'); 

// Kelurahan
  Route::get('/kelurahan/getKelurahan','App\Http\Controllers\KelurahanController@getKel');
  Route::post('/kelurahan/storeKel',   'App\Http\Controllers\KelurahanController@storeKel');
  Route::post('/kelurahan/updateKel',   'App\Http\Controllers\KelurahanController@updateKel');
  Route::post('/kelurahan/showKel',   'App\Http\Controllers\KelurahanController@showKel');
  Route::post('/kelurahan/deleteKel','App\Http\Controllers\KelurahanController@deleteKel');
  Route::post('/kelurahan/laporanKel','App\Http\Controllers\KelurahanController@laporanKel');
  Route::post('/kelurahan/laporanPerKel','App\Http\Controllers\kelurahanController@laporanPerKel');

//Rt
Route::post('/rt/showRt','App\Http\Controllers\RtController@showRt');
Route::get('/rt/getRt', 'App\Http\Controllers\RtController@getRt');
Route::post('/rt/storeRt',   'App\Http\Controllers\RtController@storeRt');
Route::post('/rt/updateRt',   'App\Http\Controllers\RtController@updateRt');
Route::post('/rt/deleteRt',   'App\Http\Controllers\RtController@deleteRt');
//Route::delete('/rt/deleteRt/{id}',   'rtController@deleteRt');

//Rw
Route::post('/rw/showRw','App\Http\Controllers\RwController@showRw');
Route::get('/rw/getRw', 'App\Http\Controllers\RwController@getRw');
Route::post('/rw/storeRw',   'App\Http\Controllers\RwController@storeRw');
Route::post('/rw/updateRw',   'App\Http\Controllers\RwController@updateRw');
Route::post('/rw/deleteRw',   'App\Http\Controllers\RwController@deleteRw');
//Route::delete('/rt/deleteRt/{id}',   'rtController@deleteRt');
//Setting
Route::post('/setting/showSetting','App\Http\Controllers\SettingController@showSetting');
Route::get('/setting/getSetting', 'App\Http\Controllers\SettingController@getSetting');
Route::post('/setting/storeSetting',   'App\Http\Controllers\SettingController@storeSetting');
Route::post('/setting/updateSetting',   'App\Http\Controllers\SettingController@updateSetting');
Route::post('/setting/deleteSetting',   'App\Http\Controllers\SettingController@deleteSetting');

//Kelompok Data
Route::post('/kelompok-data/showKelompokData','App\Http\Controllers\KelompokDataController@showKelompokData');
Route::get('/kelompok-data/getKelompokData', 'App\Http\Controllers\KelompokDataController@getKelompokData');
Route::post('/kelompok-data/storeKelompokData',   'App\Http\Controllers\KelompokDataController@storeKelompokData');
Route::post('/kelompok-data/updateKelompokData','App\Http\Controllers\KelompokDataController@updateKelompokData');
Route::post('/kelompok-data/deleteKelompokData',   'App\Http\Controllers\KelompokDataController@deleteKelompokData');

//TargetKk
Route::post('/target-kk/showTargetKk','App\Http\Controllers\TargetKkController@showTargetKk');
Route::post('/target-kk/showTargetKkPerProv','App\Http\Controllers\TargetKkController@showTargetKkPerProv');
Route::get('/target-kk/getTargetKk', 'App\Http\Controllers\TargetKkController@getTargetKk');
Route::post('/target-kk/storeTargetKk',   'App\Http\Controllers\TargetKkController@storeTargetKk');
Route::post('/target-kk/updateTargetKk',   'App\Http\Controllers\TargetKkController@updateTargetKk');
Route::post('/target-kk/deleteTargetKk',   'App\Http\Controllers\TargetKkController@deleteTargetKk');

//LaporanSensus
Route::post('/laporan-sensus/indonesia','App\Http\Controllers\LaporanSensusController@showLaporanSensusID');
Route::post('/laporan-sensus/perprov','App\Http\Controllers\LaporanSensusController@showLaporanSensusPerProv');
Route::post('/laporan-sensus/perkab','App\Http\Controllers\LaporanSensusController@showLaporanSensusPerKab');
Route::post('/laporan-sensus/perkec','App\Http\Controllers\LaporanSensusController@showLaporanSensusPerKec');
Route::post('/laporan-sensus/perkel','App\Http\Controllers\LaporanSensusController@showLaporanSensusPerKel');

//Form KK
Route::post('/form-kk/showFormKK','App\Http\Controllers\FormKKController@showFormKK');
Route::get('/form-kk/getFormKK', 'App\Http\Controllers\FormKKController@getFormKK');
Route::post('/form-kk/storeFormKK','App\Http\Controllers\FormKKController@storeFormKK');
Route::post('/form-kk/acceptFormKK','App\Http\Controllers\FormKKController@acceptFormKK');

//Anggota KK
Route::get('/anggota-kk/getAnggotaKK','App\Http\Controllers\AnggotaKKController@getAnggotaKK');
Route::post('/anggota-kk/updateAnggotaKK','App\Http\Controllers\AnggotaKKController@updateAnggotaKK');
Route::post('/anggota-kk/showAnggotaKK','App\Http\Controllers\AnggotaKKController@showAnggotaKK');
Route::get('/anggota-kk/getNIKAnggota','App\Http\Controllers\AnggotaKKController@getNIKAnggota');
Route::post('/anggota-kk/storeAnggotaKK',   'App\Http\Controllers\AnggotaKKController@storeAnggotaKK');


//Email
Route::get('/mail','App\Http\Controllers\MailController@mail');

//FormKK
Route::post('/form-kk/showFormKK', 'App\Http\Controllers\FormKKController@showFormKK');
Route::get('/form-kk/getFormKK', 'App\Http\Controllers\FormKKController@getFormKK');
Route::get('/form-kk/getIdKK','App\Http\Controllers\FormKKController@getIdKK');
Route::get('/form-kk/acceptFormKK','App\Http\Controllers\FormKKController@acceptFormKK');
Route::post('/form-kk/storeFormKK', 'App\Http\Controllers\FormKKController@storeFormKK');
Route::post('/form-kk/updateFormKK', 'App\Http\Controllers\FormKKController@updateFormKK');
Route::post('/form-kk/deleteFormKK', 'App\Http\Controllers\FormKKController@deleteFormKK');
Route::post('/form-kk/showKKPerprov', 'App\Http\Controllers\FormKKController@showKKPerProv');

//KB
Route::get('/data-kb/getKB','App\Http\Controllers\KBController@getKB');
Route::post('/data-kb/updateKB','App\Http\Controllers\KBController@updateKB');
Route::post('/data-kb/addKB','App\Http\Controllers\KBController@storeKB');
Route::post('/data-kb/deleteKB','App\Http\Controllers\KBController@deleteKB');
Route::post('/data-kb/editKB','App\Http\Controllers\KBController@editKB');

// Realisasi
Route::post('/realisasi/id','App\Http\Controllers\RealisasiController@RealisasiProv');
Route::post('/realisasi/perprov','App\Http\Controllers\RealisasiController@RealisasiPerProv');
Route::post('/realisasi/perkab','App\Http\Controllers\RealisasiController@RealisasiPerKab');
Route::post('/realisasi/kbId','App\Http\Controllers\RealisasiController@LaporanAlatKBID');
Route::post('/realisasi/alatKbPerProv','App\Http\Controllers\RealisasiController@LaporanAlatKBPerProv');
Route::post('/realisasi/alatKbPerKab','App\Http\Controllers\RealisasiController@LaporanAlatKBPerKab');