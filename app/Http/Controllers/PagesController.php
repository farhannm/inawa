<?php

namespace App\Http\Controllers;

use App\Models\LokasiTarif;
use App\Models\User;
use App\Models\Penghuni;
use App\Models\Rusun;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{

    public function viewTipe()
    {
        $tipes = LokasiTarif::with(['rusun:id_m_rusun,nama_rusun', 'tipe:id_r_tipe_kamar,tipe_kamar'])
            ->paginate(request('perpage', 10));

        return view('pages.master-data.tipe.tipe', compact('tipes'));
    }

    public function viewIndex()
    {
        return view('pages/index');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function viewPenghuni()
    {
        $penghunis = Penghuni::paginate(request('perpage', 10));

        return view('pages.master-data.penghuni.penghuni', compact('penghunis'));
    }

    public function viewRusun()
    {
        $rusuns = Rusun::paginate(request('perpage', 10));

        return view('pages/master-data/rusun/rusun', compact('rusuns'));
    }

    public function viewAddRusun(Request $request)
    {
        $kecamatanList = Kecamatan::where('id_r_area_kabkota', 443)->get();

        $kelurahanList = collect();
        if ($request->has('kecamatan_id')) {
            $kelurahanList = Kelurahan::where('id_r_area_kecamatan', $request->kecamatan_id)->get();
        }

        return view('pages/master-data/rusun/add-rusun', compact('kecamatanList', 'kelurahanList'));
    }

    public function viewTarif()
    {
        return view('pages/master-data/tarif/tarif');
    }

    public function viewKamar()
    {
        $m_kamar = DB::table('m_kamar')
            ->join('r_lokasi_tarif', 'm_kamar.id_r_lokasi_tarif', '=', 'r_lokasi_tarif.id_r_lokasi_tarif')
            ->join('m_rusun', 'r_lokasi_tarif.id_m_rusun', '=', 'm_rusun.id_m_rusun')
            ->select('m_kamar.*', 'm_rusun.nama_rusun')
            ->get();

        return view('m_kamar.index', compact('m_kamar'));
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
