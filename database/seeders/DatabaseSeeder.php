<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // user
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password')
        ]);

        // products
        Product::create([
            'nama_produk' => "Produk A",
            //'gambar' => '',
            'harga' => 150000,
            'banyak_produk' => 15,
            'kategori' => 'casual',
            'deskripsi' => 'ini deskripsi produk A',
            'slug' => 'produk-a'
        ]);

        Product::create([
            'nama_produk' => "Produk B",
            //'gambar' => '',
            'harga' => 250000,
            'banyak_produk' => 1,
            'kategori' => 'sport',
            'deskripsi' => 'ini deskripsi produk B',
            'slug' => 'produk-b'
        ]);

        Product::create([
            'nama_produk' => "Produk C",
            //'gambar' => '',
            'harga' => 100000,
            'banyak_produk' => 10,
            'kategori' => 'casual',
            'deskripsi' => 'ini deskripsi produk C',
            'slug' => 'produk-c'
        ]);

        Order::create([
            'kode_pesanan' => "GAL001",
            'nama_pemesan' => "Sabil",
            'nomor_hp' => "081234567890",
            'alamat' => "Bandung, Jawa Barat",
            'id_produk' => 1,
            'jumlah_produk' => 1,
            'ongkir' => 5000,
            'total_bayar' => 125000,
            'metode_bayar' => "COD",
            'bukti_bayar' => "bukti-GAL001.png",
            'status_pesanan' => "Dikemas",
        ]);

        Order::create([
            'kode_pesanan' => "GAL002",
            'nama_pemesan' => "Tes",
            'nomor_hp' => "081234567890",
            'alamat' => "Surabaya, Jawa Timur",
            'id_produk' => 2,
            'jumlah_produk' => 1,
            'ongkir' => 10000,
            'total_bayar' => 160000,
            'metode_bayar' => "Transfer",
            'bukti_bayar' => "bukti-GAL002.png",
            'status_pesanan' => "Dikemas",
        ]);

        Order::create([
            'kode_pesanan' => "GAL003",
            'nama_pemesan' => "Produk",
            'nomor_hp' => "081234567890",
            'alamat' => "Solo, Jawa Tengah",
            'id_produk' => 3,
            'jumlah_produk' => 1,
            'ongkir' => 10000,
            'total_bayar' => 110000,
            'metode_bayar' => "Transfer",
            'bukti_bayar' => "bukti-GAL003.png",
            'status_pesanan' => "Dikirim",
        ]);
    }
}
