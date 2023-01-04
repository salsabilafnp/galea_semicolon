<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            "title" => "Produk Galea",
            "products" => Product::all(),
            "stok_produk_tersedia" => Product::where('banyak_produk', '>', 0)->get()->count(),
            "stok_produk_habis" => Product::where('banyak_produk', '=', 0)->get()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create', [
            "title" => "Produk Galea"
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
            'nama_produk'           => 'required',
            'harga'                 => 'required',
            'banyak_produk'         => 'required',
            'kategori'              => 'required',
            'deskripsi'             => 'required',
            'gambar'                => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validatedData['slug'] = Str::slug($request->nama_produk, '-');

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/products/', $gambar->hashName());

        //create post
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'banyak_produk' => $request->banyak_produk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar->hashName(),
            'slug' => $validatedData['slug']
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            "title" => $product->nama_produk,
            "products" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            "title" => $product->nama_produk,
            "products" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //validate form
        $this->validate($request, [
            'nama_produk'           => 'required',
            'harga'                 => 'required',
            'banyak_produk'         => 'required',
            'kategori'              => 'required',
            'deskripsi'             => 'required',
            'gambar'                => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new gambar
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/products', $gambar->hashName());

            //delete old gambar
            Storage::delete('public/products/' . $product->gambar);

            //update prod$product with new gambar
            $product->update([
                'nama_produk'     => $request->nama_produk,
                'harga'     => $request->harga,
                'banyak_produk'     => $request->banyak_produk,
                'kategori'     => $request->kategori,
                'deskripsi'     => $request->deskripsi,
                'gambar'     => $gambar->hashName()
            ]);
        } else {

            //update produk without gambar
            $product->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
