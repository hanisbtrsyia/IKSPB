<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'troli_pembelian'; //order table

    protected $fillable = [
        'id_order', //id
        'id_pelanggan',
        'subtotal',
        'Emel', 
        'NamaPelanggan',
        'NoTel', 
        'Address', 
        'Postcode',
        'City', 
        'District',
        'State',
    ];

    protected $primaryKey = 'id_order';
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'id_order';
    }
}
