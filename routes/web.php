<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

//products
Route::get('/productss', function () {
    return view('products', [
        "title" => "Products"
    ]);
});

//product
Route::get('/product', function () {
    return view('product', [
        "title" => "Name of Product"
    ]);
});

//about
Route::get('/about', function () {
    return view('about', [
        "title" => "About Galea"
    ]);
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Cart
Route::get('/cart', [CartController::class, 'index']);

//admin
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    //dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            "title" => "Dashboard",
            //"newOrder" => ,
            "admin" => User::where('role', 'admin')->get(),
            //"stok_produk_tersedia" => Product::where('banyak_produk', '>', 0)->get()->count(),
            //"stok_produk_habis" => Product::where('banyak_produk', '=', 0)->count()
        ]);
    });

    //our product
    Route::resource('/dashboard/products', DashboardProductsController::class);
    //detail
    Route::get('/dashboard/products/{products:slug}', [DashboardProductsController::class, 'show']);
    //edit
    Route::get('/dashboard/products/{products:slug}/edit', [DashboardProductsController::class, 'edit']);
    //delete
    Route::post('/dashboard/products/{products:slug}', [DashboardProductsController::class, 'delete']);
});
