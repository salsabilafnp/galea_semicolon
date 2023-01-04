<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.orders.index', [
            "title" => "Pesanan",
            "orders" => Order::all(),
            "order_dikemas" => Order::where('status_pesanan', 'dikemas')->get()->count(),
            "order_dikirim" => Order::where('status_pesanan', 'dikirim')->get()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.orders.create', [
            "title" => "Tambah Pesanan",
            "products" => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->$request->validate([
            'nama_pemesan' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'nama_produk' => 'required',
            'jumlah_produk' => 'required',
            'ongkir' => 'required',
            'metode_bayar' => 'required',
            'bukti_bayar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $kode_pesanan = "GAL" . $request->id;
        $produk = Product::where("nama_produk", $request->nama_produk)->value('harga');
        $bayar_produk = $produk * $request->jumlah_produk;
        $total_bayar = $bayar_produk + $request->ongkir;

        //upload image
        $gambar = $request->file('bukti_bayar');
        $gambar->storeAs('public/orders/', $gambar->hashName());

        //create post
        Product::create([
            'kode_pesanan' => $kode_pesanan,
            'nama_pemesan' => $request->nama_pesanan,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'nama_produk' => $request->nama_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'bayar_produk' => $bayar_produk,
            'ongkir' => $request->ongkir,
            'total_bayar' => $total_bayar,
            'metode_bayar' => $request->metode_bayar,
            'bukti_bayar' => $gambar->hashName()
        ]);

        //redirect to index
        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('dashboard.orders.show', [
            "title" => $order->kode_pesanan,
            "orders" => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', [
            "title" => "Ubah Pesanan" . $order->kode_pesanan,
            "orders" => $order,
            "products" => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
