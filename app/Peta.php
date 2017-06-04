<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peta extends Model
{
    protected $table = 'petas';

    protected $fillable = ['id_karyawan','deskripsi_pesanan','jumlah_pesanan','tujuan','prioritas'];

    public function pegawais(){
        return $this->hasMany(pegawai::class);
    }
}
