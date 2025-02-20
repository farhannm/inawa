<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rusun;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Auth;

class RusunController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_rusun' => 'required|string|max:40|unique:m_rusun,nama_rusun',
            'alamat' => 'required|string|max:200',
            'id_r_area_provinsi' => 'nullable|integer',
            'id_r_area_kabkota' => 'nullable|integer',
            'id_r_area_kecamatan' => 'required|exists:kecamatan,id_r_area_kecamatan',
            'id_r_area_kelurahan' => 'required|exists:kelurahan,id_r_area_kelurahan',
            'luas_area' => 'required|integer|min:0',
            'jumlah_kamar' => 'nullable|integer|min:0',
            'kapasitas_r2' => 'nullable|integer|min:0',
            'kapasitas_r4' => 'nullable|integer|min:0',
            'tahun_dibangun' => 'required|integer|min:1900|max:' . date('Y'),
            'tahun_direnovasi' => 'nullable|integer|min:1900|max:' . date('Y'),
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/rusun');
            $fotoPath = str_replace('public/', 'storage/', $fotoPath);
        }

        Rusun::create([
            'nama_rusun' => $request->nama_rusun,
            'alamat' => $request->alamat,
            'id_r_area_provinsi' => $request->id_r_area_provinsi,
            'id_r_area_kabkota' => $request->id_r_area_kabkota,
            'id_r_area_kecamatan' => $request->id_r_area_kecamatan,
            'id_r_area_kelurahan' => $request->id_r_area_kelurahan,
            'luas_area' => $request->luas_area,
            'jumlah_kamar' => $request->jumlah_kamar,
            'kapasitas_r2' => $request->kapasitas_r2,
            'kapasitas_r4' => $request->kapasitas_r4,
            'tahun_dibangun' => $request->tahun_dibangun,
            'tahun_direnovasi' => $request->tahun_direnovasi,
            'foto' => $fotoPath,
            'user_input' => Auth::user()->name ?? 'system',
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('viewRusun')->with('success', 'Data Rusun berhasil disimpan!');
    }
    
}

