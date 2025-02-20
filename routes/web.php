<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RusunController;
use App\Http\Middleware\CheckUserSession;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

Route::get('/login', [PagesController::class, 'viewLogin'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/get-rusun-tipe', [PagesController::class, 'getRusunTipe']);

Route::middleware([CheckUserSession::class])->group(function () {
    Route::get('/', [PagesController::class, 'viewIndex'])->name('index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /* Master Data */

    //Penghuni
    Route::get('/master-data/penghuni', [PagesController::class, 'viewPenghuni'])->name('viewPenghuni');
    // route for functionality of penghuni (same as bellow)

    //Rusun
    Route::get('/master-data/rusun', [PagesController::class, 'viewRusun'])->name('viewRusun');
    Route::get('/master-data/add-rusun', [PagesController::class, 'viewAddRusun'])->name('viewAddRusun');
    Route::post('/master-data/add-rusun', [RusunController::class, 'store'])->name('store');
    Route::get('/get-kelurahan', function (Request $request) {
        return Kelurahan::where('id_r_area_kecamatan', $request->kecamatan_id)->get();
    })->name('getKelurahan');


    //Tipe
    Route::get('/master-data/tipe', [PagesController::class, 'viewTipe'])->name('viewTipe');

    //Tarif
    Route::get('/master-data/tarif', [PagesController::class, 'viewTarif'])->name('viewTarif');

    //Kamar
    Route::get('/master-data/kamar', [PagesController::class, 'viewKamar'])->name('viewKamar');

    //Bank
    Route::get('/master-data/bank', [PagesController::class, 'viewBank'])->name('viewBank');

    //Kendaraan
    Route::get('/master-data/kendaraan', [PagesController::class, 'viewKendaraan'])->name('viewKendaraan');

    /* Transaksi */

    //Pengajuan
    Route::get('/transaksi/pengajuan', [PagesController::class, 'viewPengajuan'])->name('viewPengajuan');

    //Wawancara
    Route::get('/transaksi/wawancara', [PagesController::class, 'viewWawancara'])->name('viewWawancara');

    //Persetujuan
    Route::get('/transaksi/persetujuan', [PagesController::class, 'viewPersetujuan'])->name('viewPersetujuan');

    //Kontrak
    Route::get('/transaksi/kontrak', [PagesController::class, 'viewKontrak'])->name('viewKontrak');

    //Putus Kontrak
    Route::get('/transaksi/putus-kontrak', [PagesController::class, 'viewPutusKontrak'])->name('viewPutusKontrak');

    //Tagihan
    Route::get('/transaksi/tagihan', [PagesController::class, 'viewTagihan'])->name('viewTagihan');

    //Pemeriksaan Properti
    Route::get('/transaksi/pemeriksaan-properti', [PagesController::class, 'viewPemeriksaanProperti'])->name('viewPemeriksaanProperti');

    /* Laporan */

    //Laporan Transaksi
    Route::get('/laporan/transaksi', [PagesController::class, 'viewLaporanTransaksi'])->name('viewLaporanTransaksi');

    //Laporan Data Penghuhi
    Route::get('/laporan/data-penghuni', [PagesController::class, 'viewLaporanDataPenghuni'])->name('viewLaporanDataPenghuni');

    //Laporan Aktivitas User
    Route::get('/laporan/aktivitas-user', [PagesController::class, 'viewLaporanAktivitasUser'])->name('viewLaporanAktivitasUser');
});






