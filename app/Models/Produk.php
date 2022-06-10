<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;


class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';

    protected $fillable = [
        'id_produk',
        'NamaKategori',
        'NamaProduk',
        'Harga',
        'penerangan',
        'GambarProduk',
        'Unit',
        'Berat',
    ];

    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($produk) {
            if (!$produk->id_produk) {
                while (true) {
                    try {
                        $latest = Produk::latest('id_produk')->first();
                        $uid=1000;

                        if ($latest != null && $latest->exists()) {
                            $uid = random_int(1000, 9999);
                        }

                        $produk->id_produk = 'P' . $uid;
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
    $this->attributes['GambarProduk'] = json_encode($value);
}

public function getPictureAttribute($value){
    return json_decode($value);
}

public function getRouteKeyName()
    {
        return 'id_produk';
    }

    
}