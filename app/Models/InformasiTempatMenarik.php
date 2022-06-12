<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class InformasiTempatMenarik extends Model
{
    use HasFactory;
    protected $table = 'informasi_tempat_menarik';

    protected $fillable = [
        'id_tempatMenarik',
        'NamaTempat',
        'gambar',
        'Lokasi',
        'penerangan',
    ];

    protected $primaryKey = 'id_tempatMenarik';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($TempMenarik) {
            if (!$TempMenarik->id_tempatMenarik) {
                while (true) {
                    try {
                        $latest = InformasiTempatMenarik::latest('id_tempatMenarik')->first();
                        $tid=1000;

                        if ($latest != null && $latest->exists()) {
                            $tid = random_int(1000, 9999);
                        }

                        $TempMenarik->id_tempatMenarik = 'TM' . $tid;
                        break;
                    } catch (QueryException $exception) {
                        continue;
                    }
                }
                // $user->save();
            }
        });
    }


public function setgambarAttribute($value){
    $this->attributes['gambar'] = json_encode($value);
}

public function getgambarAttribute($value){
    return json_decode($value);
}

public function getRouteKeyName()
    {
        return 'id_tempatMenarik';
    }
}
