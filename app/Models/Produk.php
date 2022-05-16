<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;


class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    public $incrementing = true;

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


public function setPictureAttribute($value){
    $this->attributes['GambarProduk'] = json_encode($value);
}

public function getPictureAttribute($value){
    return json_decode($value);
}
}