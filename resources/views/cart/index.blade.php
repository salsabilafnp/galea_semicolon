@extends('layouts.main')

@section('container')
        <h5>keranjang</h5>

        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{session('message')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table text-center mt-4">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Size</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="/img/semicolon.png" width="200" alt="">
                            </td>
                            <td>Helm ku Bogo!</td>
                            <td>M</td>
                            <td>1</td>
                            <td>250.000</td>
                            <td>250.000</td>
                            <td ><i class="bi bi-trash-fill text-danger"></i></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right">
                                <strong>Total Harga :</strong>
                            </td>
                            <td>
                                <strong>Rp. 1000.000</strong>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <button type="button" class="btn btn-success btn-sm">Beli</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection