<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//     Route::get('/contoh', function () {
//     return view('home');
// });
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/produk', function () {
//     return view('produk');
// });

Route::get('/home', [ContohController::class, 'ViewHome']);
Route::get('/produk', [ContohController::class, 'ViewProduk']);
Route::get('/produk/add', [ContohController::class, 'ViewAddProduk']);
Route::post('/produk/add', [ContohController::class, 'CreateProduk']);

Route::delete('/produk/delete/{kode_produk}', [ProdukController::class,'DeleteProduk']);
Route::get('/produk/edit/{kode_produk}', [ProdukController::class,'ViewEditProduk']);
Route::put('/produk/edit/{kode_produk}', [ProdukController::class,'UpdateProduk']);



