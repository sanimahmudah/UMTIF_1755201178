<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'kode_dosen';
    //Field yang hanya boleh diisi
    protected $fillable = ['kode_dosen','nama_dosen','nidn','email','handphone','alamat'];

    //Field yang diabaikan isiannya
    protected $guarded = [];
    
    public function prodi()
   {
    return $this->hasOne('App\Prodi','kode_prodi','prodi');
   }
}
