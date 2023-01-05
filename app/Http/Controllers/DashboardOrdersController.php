<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            "products" => Product::all(),
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
        $validatedData = $request->validate([
            'nama_pemesan' => 'required',
            'nomor_hp' => 'required|min:10|max:15',
            'alamat' => 'required',
            'id_produk' => 'required',
            'jumlah_produk' => 'required',
            'ongkir' => 'required',
            'metode_bayar' => 'required',
            'bukti_bayar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validatedData['kode_pesanan'] = "GAL" . random_int(001, 100);
        $harga_produk = Product::where('id', $request->id_produk)->value('harga');
        $validatedData['total_bayar'] = ($harga_produk * $request->jumlah_produk) + $request->ongkir;

        //upload image
        $gambar = $request->file('bukti_bayar');
        $gambar->storeAs('public/orders/', $validatedData['kode_pesanan']);

        //create post
        Order::create($validatedData);

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
            "title" => "Detail " . $order->kode_pesanan,
            "orders" => $order,
            "products" => Product::all()
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
            "title" => "Ubah Pesanan " . $order->kode_pesanan,
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
        //validate form
        $validatedData = $request->validate([
            'kode_pesanan' => 'required',
            'nama_pemesan' => 'required',
            'nomor_hp' => 'required|min:10|max:15',
            'alamat' => 'required',
            'id_produk' => 'required',
            'jumlah_produk' => 'required',
            'ongkir' => 'required',
            'metode_bayar' => 'required',
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_pesanan' => 'required',
        ]);

        $harga_produk = Product::where('id', $request->id_produk)->value('harga');
        $validatedData['total_bayar'] = ($harga_produk * $request->jumlah_produk) + $request->ongkir;


        //check if image is uploaded
        if ($request->hasFile('bukti_bayar')) {

            //upload new gambar
            $gambar = $request->file('bukti_bayar');
            $gambar->storeAs('public/orders/', $validatedData['kode_pesanan']);

            //delete old gambar
            Storage::delete('public/orders/', $validatedData['bukti_bayar']);

            //update order with new gambar
            Order::where('kode_pesanan', $order->kode_pesanan)->update($validatedData);
        } else {
            //update produk without gambar
            $order->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);

        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
