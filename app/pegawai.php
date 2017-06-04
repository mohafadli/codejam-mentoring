<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'keterangan'
    ];

    public function peta(){
        return $this->belongsTo( Peta::class);
    }
}
