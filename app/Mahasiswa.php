<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    //Field yang hanya boleh diisi
    protected $fillable = ['nim','nama_lengkap','prodi','alamat'];
    //Field yang diabaikan isiannya
    protected $guarded = [];
    public function prodi()
   {
        return $this->hasOne('App\Prodi','kode_prodi','prodi');
   }
}

