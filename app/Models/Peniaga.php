<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class Peniaga extends Model
{
    use HasFactory;
    protected $table = 'peniaga';

    protected $fillable = [
        'id_peniaga',
        'NamaPengguna',
        'KataLaluan',
        'Emel',
        'NoTel',
        'GambarProfil',
        'NamaKedai',
        'Alamat',
        'NoAkaun',
    ];

    protected $primaryKey = 'id_peniaga';
    public $incrementing = false;
    protected $keyType = 'string';

    


public function setPictureAttribute($value){
    $this->attributes['GambarProfil'] = json_encode($value);
}

public function getPictureAttribute($value){
    return json_decode($value);
}

public function getRouteKeyName()
    {
        return 'id_peniaga';
    }
}
