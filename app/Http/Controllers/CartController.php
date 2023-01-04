<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //index
    public function index()
    {
        // $this->pesanan = Pesanan::where()

        return view('cart.index', [
            'title' => 'Cart',
            'active' => 'cart'
        ]);
    }

    protected $pesanan;
    protected $pesanan_detail = [];
}