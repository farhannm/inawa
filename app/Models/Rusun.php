<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rusun extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'm_rusun'; // Sesuai dengan tabel di database
    protected $primaryKey = 'id_m_rusun'; // Primary key yang sesuai

    protected $fillable = [
        'nama_rusun',
        'alamat',
        'id_r_area_provinsi',
        'id_r_area_kabkota',
        'id_r_area_kecamatan',
        'id_r_area_kelurahan',
        'luas_area',
        'jumlah_kamar',
        'kapasitas_r2',
        'kapasitas_r4',
        'tahun_dibangun',
        'tahun_direnovasi',
        'foto',
        'user_input',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $dates = ['deleted_at'];

    public $timestamps = true;
}


