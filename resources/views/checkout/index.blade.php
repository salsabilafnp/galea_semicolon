@extends('layouts.main')

@section('container')
    <div class="row">
        <h1 class="text-center">Checkout</h1>
        <div class="col-md-6 mt-5">
            <h5>Ringkasan Pembayaran</h5>
            <hr>

            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Kode Pesanan</h6>
                <span class="">001</span>
            </div>
            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Nama Produk</h6>
                <span class="">Helm ku Bogo!</span>
            </div>
            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Jumlah Produk</h6>
                <span class="">1</span>
            </div>
            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Bayar Produk</h6>
                <span class="">1</span>
            </div>
            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Ongkir</h6>
                <span class="">1</span>
            </div>
            <div class="d-flex justify-content-between w-75 mb-2">
                <h6>Total Bayar</h6>
                <span class="">1</span>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <h5>Informasi Pengiriman</h5>
            <hr>
            <form action="">
                <div class="mb-3">
                    <label for="pemesan" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="pemesan">
                </div>
                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomer HP</label>
                    <input type="number" class="form-control" id="nomor_hp">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="metode_bayar" class="form-label">Metode Pembayaran</label>
                    <select class="form-select" aria-label="Default select example" id="metode_bayar">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bukti_bayar" class="form-label">Bukti Bayar</label>
                    <input class="form-control" type="file" id="bukti_bayar">
                </div>
            </form>
            <button type="submit" class="btn btn-success w-100">Checkout</button>
        </div>
    </div>
@endsection