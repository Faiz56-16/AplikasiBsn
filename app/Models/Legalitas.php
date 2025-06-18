<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalitas extends Model
{
    use HasFactory;

    protected $table = 'legalitas_usaha';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'umk_id',
        'nib',
        'halal',
        'pirt',
        'md',
        'skp',
        'nkv',
        'psat',
        'psah',
    ];
    public function profil()
    {
        return $this->belongsTo(Umk::class);
    }
}
