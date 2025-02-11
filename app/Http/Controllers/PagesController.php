<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewIndex()
    {
        return view('pages/index');
    }

    public function viewLogin()
    {
        return view('login');
    }

    //Any stuff for view Master Data
    public function viewPenghuni()
    {
        return view('pages/master-data/penghuni/penghuni');
    }

    public function viewRusun()
    {
        return view('pages/master-data/rusun/rusun');
    }
    
    public function viewTipe()
    {
        return view('pages/master-data/tipe/tipe');
    }

    public function viewTarif()
    {
        return view('pages/master-data/tarif/tarif');
    }

    public function viewKamar()
    {
        return view('pages/master-data/kamar/kamar');
    }

    public function viewBank()
    {
        return view('pages/master-data/bank/bank');
    }

    public function viewKendaraan()
    {
        return view('pages/master-data/kendaraan/kendaraan');
    }

    //Any stuff for view Transaksi
    public function viewPengajuan()
    {
        return view('pages/transaksi/pengajuan/pengajuan');
    }

    public function viewWawancara()
    {
        return view('pages/transaksi/wawancara/wawancara');
    }

    public function viewPersetujuan()
    {
        return view('pages/transaksi/persetujuan/persetujuan');
    }

    public function viewKontrak()
    {
        return view('pages/transaksi/kontrak/kontrak');
    }

    public function viewPutusKontrak()
    {
        return view('pages/transaksi/putus-kontrak/putus-kontrak');
    }

    public function viewTagihan()
    {
        return view('pages/transaksi/tagihan/tagihan');
    }

    public function viewPemeriksaanProperti()
    {
        return view('pages/transaksi/pemeriksaan-properti/pemeriksaan-properti');
    }

    //Any stuff for view Laporan
    public function viewLaporanTransaksi()
    {
        return view('pages/laporan/laporan-transaksi/laporan-transaksi');
    }

    public function viewLaporanDataPenghuni()
    {
        return view('pages/laporan/laporan-data-penghuni/laporan-data-penghuni');
    }

    public function viewLaporanAktivitasUser()
    {
        return view('pages/laporan/laporan-aktivitas-user/laporan-aktivitas-user');
    }
}
