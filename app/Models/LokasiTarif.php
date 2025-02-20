<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiTarif extends Model
{
    protected $table = 'r_lokasi_tarif';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tarif',
        'keterangan',
        'id_m_rusun',
        'id_r_tipe_kamar'
    ];

    public function rusun()
    {
        return $this->belongsTo(Rusun::class, 'id_m_rusun', 'id_m_rusun');
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'id_r_tipe_kamar', 'id_r_tipe_kamar');
    }

        // public function rusun()
    // {
    //     return $this->hasMany(Rusun::class, 'id_m_rusun', 'id');
    // }

    // public function tipe()
    // {
    //     return $this->hasMany(Tipe::class, 'id_r_tipe_kamar', 'id');
    // }
}
