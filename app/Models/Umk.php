<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umk extends Model
{
    use HasFactory;

    protected $table = 'umk';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nama_umkm',
        'alamat',
        'no_hp',
        'daftar_merk',
        'struktur_organisasi',
        'jumlah_tenaga_kerja',
        'jangkauan_distribusi',
        'permodalan',
        'volume_produksi_per_bulan',
        'berpotensi_ekspor',
        'negara_tujuan_ekspor',
        'sni_terkait',
        'peraturan_terkait',
        'sertifikasi_lain',
        'skema_sertifikasi',
    ];
    public function legalitas()
    {
        return $this->hasOne(Legalitas::class);
    }
}
