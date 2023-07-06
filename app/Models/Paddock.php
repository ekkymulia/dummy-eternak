<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paddock extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paddock',
        'lokasi_paddock',
        'id_kandang'
    ];

    public function ternaks()
    {
        return $this->hasMany(Ternak::class, 'id_paddock');
    }
}
