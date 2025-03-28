<?php

namespace App\Models\profil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

class RiwayatIstri extends Model
{
    use HasFactory;
    protected $table = 'tb_profil_riwayat_istri';
    protected $fillable = ['id','uuid','id_pegawai','nama_istri','tempat_lahir','tanggal_lahir','status_perkawinan','memperoleh_tunjangan','pendidikan','pekerjaan','keterangan','foto_buku_nikah'];
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            try {
                $model->uuid = Generator::uuid4()->toString();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
