<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'r_tipe_kamar';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tipe_kamar'

    ];

    // public function lokasiTarif()
    // {
    //     return $this->belongsTo(LokasiTarif::class, 'id_r_tipe_kamar', 'id');
    // }

}
