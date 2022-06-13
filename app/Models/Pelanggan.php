<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    protected $fillable = [
        'id_pelanggan',
        'NamaPelanggan',
        'AlamatPenghantaran',
        'Emel',
        'NoTel',
    ];

    protected $primaryKey = 'id_pelanggan';
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'id_pelanggan';
    }
}
