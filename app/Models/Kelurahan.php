<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'r_area_kelurahan';
    protected $primaryKey = 'id_r_area_kelurahan';
    public $timestamps = true;

    protected $fillable = ['id_r_area_kelurahan', 'id_r_area_kecamatan', 'nama'];
}
