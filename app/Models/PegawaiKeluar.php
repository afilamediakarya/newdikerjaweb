<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

class PegawaiKeluar extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai_keluar';
    protected $fillable = ['id','uuid','id_pegawai','id_jabatan_terakhir','tujuan_daerah','tmt','status','tahun'];

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
