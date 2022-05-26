<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class InformasiTempatPenginapan extends Model
{
    use HasFactory;
    protected $table = 'informasi_tempat_penginapan';

    protected $fillable = [
        'id_tempatPenginapan',
        'NamaTempat',
        'NamaHos',
        'NoTel',
        'Lokasi',
        'penerangan',
        'gambar',
        'HargaPerMalam',
        'Kemudahan',
    ];

    protected $primaryKey = 'id_tempatPenginapan';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($TempPenginapan) {
            if (!$TempPenginapan->id_tempatPenginapan) {
                while (true) {
                    try {
                        $latest = InformasiTempatPenginapan::latest('id_tempatPenginapan')->first();
                        $pid=1000;

                        if ($latest != null && $latest->exists()) {
                            $pid = random_int(1000, 9999);
                        }

                        $TempPenginapan->id_tempatPenginapan = 'TP' . $pid;
                        break;
                    } catch (QueryException $exception) {
                        continue;
                    }
                }
                // $user->save();
            }
        });
    }


public function setPictureAttribute($value){
    $this->attributes['gambar'] = json_encode($value);
}

public function getPictureAttribute($value){
    return json_decode($value);
}
}
