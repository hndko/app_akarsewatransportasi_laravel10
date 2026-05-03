<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaKendaraan extends Model
{
    use HasFactory;

    protected $table = 'sewa_kendaraans';

    protected $fillable = [
        'kode',
        'kendaraan_id',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'id');
    }

    public function sewa()
    {
        return $this->belongsTo(Sewa::class, 'kode_sewa', 'kode');
    }
}
