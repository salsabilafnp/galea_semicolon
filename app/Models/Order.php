<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function id_produk()
    {
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName()
    {
        return 'kode_pesanan';
    }
}
