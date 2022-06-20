<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'item_dalam_troli'; //order details table

    protected $fillable = [
        'id_ItemTroli', //order details id
        'id_order', //order id
        'id_produk', //prod id
        'NamaProduk', //prod name
        'Harga', //price
        'Kuantiti', //quantity
        'Jumlah', //total
  
    ];

    protected $primaryKey = 'id_ItemTroli';
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'id_ItemTroli';
    }
}
