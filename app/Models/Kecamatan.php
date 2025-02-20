<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'r_area_kecamatan';
    protected $primaryKey = 'id_r_area_kecamatan';
    public $timestamps = true;

    protected $fillable = ['id_r_area_kecamatan', 'id_r_area_kabkota', 'nama'];
}
