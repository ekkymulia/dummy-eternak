<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kandang',
        'lokasi_kandang'
    ];

    public function ternaks()
    {
        return $this->hasMany(Ternak::class, 'id_kandang');
    }
}
