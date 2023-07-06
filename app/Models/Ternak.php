<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    use HasFactory;

    protected $table = 'ternak';

    protected $fillable = [
        'barcode',
        'kategori_ternak',
        'asal_ternak',
        'nama_indukan_betina',
        'nama_indukan_jantan',
        'keturunan_ke',
        'berat_lahir',
        'id_kandang_melahirkan',
        'id_ternak_beli',
        'jenis_ternak',
        'berat_terima',
        'no_po',
        'no_vessel',
        'id_kandang',
        'id_paddock',
        'data_timbangan_awal',
        'kondisi_awal_pertama',
        'treatment_khusus',
        'nama_vendor',
        'tanggal_penerimaan_ternak',
    ];

    public function kandangMelahirkan()
    {
        return $this->belongsTo(KandangMelahirkan::class, 'id_kandang_melahirkan');
    }

    public function kandang()
    {
        return $this->belongsTo(Kandang::class, 'id_kandang');
    }

    public function paddock()
    {
        return $this->belongsTo(Paddock::class, 'id_paddock');
    }
}
