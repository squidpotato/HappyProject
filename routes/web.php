<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // //     Route::get('/contoh', function () {
// // //     return view('home');
// // // });
// // // Route::get('/', function () {
// // //     return view('home');
// // // });

// // // Route::get('/produk', function () {
// // //     return view('produk');
// // // });

// Route::get('/home', [ContohController::class, 'ViewHome']);
// Route::get('/produk', [ContohController::class, 'ViewProduk']);
// Route::get('/produk/add', [ContohController::class, 'ViewAddProduk']);
// Route::post('/produk/add', [ContohController::class, 'CreateProduk']);

// // Route::delete('/produk/delete/{kode_produk}', [ProdukController::class,'DeleteProduk']);
// // Route::get('/produk/edit/{kode_produk}', [ProdukController::class,'ViewEditProduk']);
// // Route::put('/produk/edit/{kode_produk}', [ProdukController::class,'UpdateProduk']);

// Route::delete('/produk/delete/{kode_produk}', [ProdukController::class,'DeleteProduk']);
// Route::get('/produk/edit/{kode_produk}', [ProdukController::class,'ViewEditProduk']);
// Route::put('/produk/edit/{kode_produk}', [ProdukController::class,'UpdateProduk']);
// Route::get('/laporan', [ContohController::class, 'ViewLaporan']);
// Route::get('/report', [ContohController::class, 'print']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

// Route untuk user
Route::middleware(['auth', 'user-access:user'])->prefix('user')->group(function () {
    Route::get('/home', [HomeController::class, 'ViewHome']);
    Route::get('/produk', [ProdukController::class, 'ViewProduk']);
    Route::get('/produk/add', [ProdukController::class, 'ViewAddProduk']);
    Route::post('/produk/add', [ProdukController::class, 'CreateProduk']);

    Route::delete('/produk/delete/{kode_produk}', [ProdukController::class, 'DeleteProduk']);
    Route::get('/produk/edit/{kode_produk}', [ProdukController::class, 'ViewEditProduk']);
    Route::put('/produk/edit/{kode_produk}', [ProdukController::class, 'UpdateProduk']);

    Route::get('/report', [ProdukController::class, 'print']);
    Route::get('/laporan', [ProdukController::class, 'ViewLaporan']);
});

// Route untuk admin
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'ViewHome']);
    Route::get('/produk', [ProdukController::class, 'ViewProduk']);
    Route::get('/produk/add', [ProdukController::class, 'ViewAddProduk']);
    Route::post('/produk/add', [ProdukController::class, 'CreateProduk']);

    Route::delete('/produk/delete/{kode_produk}', [ProdukController::class, 'DeleteProduk']);
    Route::get('/produk/edit/{kode_produk}', [ProdukController::class, 'ViewEditProduk']);
    Route::put('/produk/edit/{kode_produk}', [ProdukController::class, 'UpdateProduk']);

    Route::get('/report', [ProdukController::class, 'print']);
    Route::get('/laporan', [ProdukController::class, 'ViewLaporan']);
});


