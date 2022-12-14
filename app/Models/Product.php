<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'harga', 'banyak_produk', 'kategori', 'deskripsi', 'gambar', 'slug'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
