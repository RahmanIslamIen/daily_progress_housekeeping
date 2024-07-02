<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KelolaPenugasanController;
use App\Http\Controllers\LaporanKerusakanController;
use App\Http\Controllers\PermintaanPerubahanController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// * ==================================================================================
// *                                    BAGIAN ADMIN 👨‍💼
// * ==================================================================================

// * Kelola Penugasan
// shift task
Route::get('/semua-shift-task', [KelolaPenugasanController::class, 'semuaShiftTask']);
Route::get('/tambah-shift-task', [KelolaPenugasanController::class, 'tambahShiftTask']);
Route::post('/tambah-shift-task', [KelolaPenugasanController::class, 'simpanShiftTask']);
Route::get('/ubah-shift-task/{id}', [KelolaPenugasanController::class, 'editShiftTask']);
Route::post('/ubah-shift-task/{id}', [KelolaPenugasanController::class, 'ubahShiftTask']);
Route::delete('/hapus-shift-task/{id}', [KelolaPenugasanController::class, 'hapusShiftTask']);
// daily shift
Route::get('/semua-daily-shift', [KelolaPenugasanController::class, 'semuaDailyShift']);
Route::get('/tambah-daily-shift', [KelolaPenugasanController::class, 'tambahDailyShift']);
Route::post('/tambah-daily-shift', [KelolaPenugasanController::class, 'simpanDailyShift']);
Route::get('/ubah-daily-shift/{id}', [KelolaPenugasanController::class, 'editDailyShift']);
Route::post('/ubah-daily-shift/{id}', [KelolaPenugasanController::class, 'ubahDailyShift']);
Route::delete('/hapus-daily-shift/{id}', [KelolaPenugasanController::class, 'hapusDailyShift']);
// * Laporan Kerusakan
// kerusakan toilet
Route::get('/semua-kerusakan-toilet', [LaporanKerusakanController::class, 'semuaKerusakanToilet']);
Route::get('/tambah-kerusakan-toilet', [LaporanKerusakanController::class, 'tambahKerusakanToilet']);
Route::post('/tambah-kerusakan-toilet', [LaporanKerusakanController::class, 'simpanKerusakanToilet']);
Route::get('/ubah-kerusakan-toilet/{id}', [LaporanKerusakanController::class, 'editKerusakanToilet']);
Route::post('/ubah-kerusakan-toilet/{id}', [LaporanKerusakanController::class, 'ubahKerusakanToilet']);
Route::delete('/hapus-kerusakan-toilet/{id}', [LaporanKerusakanController::class, 'hapusKerusakanToilet']);
// * Permintaan Perubahan
// perubahan daily shift
Route::get('/semua-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'semuaPermintaanUbahDailyShift']);
Route::get('/tambah-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'tambahPermintaanUbahDailyShift']);
Route::post('/tambah-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'simpanPermintaanUbahDailyShift']);
Route::get('/ubah-permintaan-perubahan-daily-shift/{id}', [PermintaanPerubahanController::class, 'editPermintaanUbahDailyShift']);
Route::post('/ubah-permintaan-perubahan-daily-shift/{id}', [PermintaanPerubahanController::class, 'ubahPermintaanUbahDailyShift']);
Route::delete('/hapus-permintaan-perubahan-daily-shift/{id}', [PermintaanPerubahanController::class, 'hapusPermintaanUbahDailyShift']);
// perubahan toilet
Route::get('/semua-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'semuaPermintaanUbahToilet']);
Route::get('/tambah-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'tambahPermintaanUbahToilet']);
Route::post('/tambah-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'simpanPermintaanUbahToilet']);
Route::get('/ubah-permintaan-perubahan-toilet/{id}', [PermintaanPerubahanController::class, 'editPermintaanUbahToilet']);
Route::post('/ubah-permintaan-perubahan-toilet/{id}', [PermintaanPerubahanController::class, 'ubahPermintaanUbahToilet']);
Route::delete('/hapus-permintaan-perubahan-toilet/{id}', [PermintaanPerubahanController::class, 'hapusPermintaanUbahToilet']);


// * ==================================================================================
// *                                    BAGIAN USER 🧑
// * ==================================================================================

// * Kelola Penugasan
// daily shift
Route::get('/user-semua-daily-shift', [KelolaPenugasanController::class, 'UserSemuaDailyShift']);
Route::get('/user-tambah-daily-shift', [KelolaPenugasanController::class, 'UserTambahDailyShift']);
Route::post('/user-tambah-daily-shift', [KelolaPenugasanController::class, 'UserSimpanDailyShift']);
// * Laporan Kerusakan
// kerusakan toilet
Route::get('/user-semua-kerusakan-toilet', [LaporanKerusakanController::class, 'UserSemuaKerusakanToilet']);
Route::get('/user-tambah-kerusakan-toilet', [LaporanKerusakanController::class, 'UserTambahKerusakanToilet']);
Route::post('/user-tambah-kerusakan-toilet', [LaporanKerusakanController::class, 'UserSimpanKerusakanToilet']);
Route::delete('/user-hapus-kerusakan-toilet', [LaporanKerusakanController::class, 'UserHapusKerusakanToilet']);
// * Permintaan Perubahan
// perubahan daily shift
Route::get('/user-semua-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'UserSemuaPermintaanUbahDailyShift']);
Route::get('/user-tambah-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'UserTambahPermintaanUbahDailyShift']);
Route::post('/user-tambah-permintaan-perubahan-daily-shift', [PermintaanPerubahanController::class, 'UserSimpanPermintaanUbahDailyShift']);
Route::delete('/user-hapus-permintaan-perubahan-daily-shift/{id}', [PermintaanPerubahanController::class, 'UserHapusPermintaanUbahDailyShift']);
// perubahan toilet
Route::get('/user-semua-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'UserSemuaPermintaanUbahToilet']);
Route::get('/user-tambah-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'UserTambahPermintaanUbahToilet']);
Route::post('/user-tambah-permintaan-perubahan-toilet', [PermintaanPerubahanController::class, 'UserSimpanPermintaanUbahToilet']);
Route::post('/user-hapus-permintaan-perubahan-toilet/{id}', [PermintaanPerubahanController::class, 'UserHapusPermintaanUbahToilet']);



// ? ==========================================================================================
// ?                                    seluruh print pdf 
// ? ==========================================================================================
Route::get('/print-pdf-shift-task', [KelolaPenugasanController::class, 'printShiftTask']);
Route::get('/print-pdf-daily-shift', [KelolaPenugasanController::class, 'printPDFdailyShift']);
Route::get('/print-pdf-keruskan-toilet/{id}', [LaporanKerusakanController::class, 'printPDFkerusakanToilet']);


Auth::routes();

