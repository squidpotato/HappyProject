<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function ViewProduk()
    {
        $produk = Produk::all(); //mengambil semua data di tabel produk
        return view('produk', ['produk' => $produk]); //menampilkan view dari produk.blade.php dengan membawa variabel $produk
    }

    public function CreateProduk(Request $request)
    {
        //menambahkan variabel $filePath untuk mendifinisikan penyimpanan file
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName); //Store the image in the 'storage/app/public
        }
        Produk::where('kode produk', $kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imageName

        ]);

        return redirect('/produk');
    }

    public function ViewAddProduk()
    {
        return view('addproduk'); //menampilkan view dari addproduk.blade.php
    }

    public function DeleteProduk($kode_produk)
    {
        Produk::where('kode_produk', $kode_produk) ->delete(); //Find the record by ID

        //Redirect back to the index page with a success massage
        return Redirect('/produk');
    }
    // Fungsi untuk View Edit Produk
    public function ViewEditProduk ($kode_produk)
    {
        $ubahproduk = Produk::where('kode_produk', $kode_produk)->first();
        //value='{{$ubahproduk->nama_produk}}'>
        return view('editproduk', compact('ubahproduk'));
    }
    // Fungsi untuk mengubah data produk
    public function UpdateProduk (Request $request, $kode_produk)
    {
        //Menambahkan variabel $filePath untuk mendefiniskan penyimpanan file
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName); //Store the image in the 'storage/app/public

        Produk::where('kode_produk', $kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk
        ]);
        return redirect('/produk');
    }
}
