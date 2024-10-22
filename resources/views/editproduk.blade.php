<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
    <!-- Header -->
    <header style="display: flex; justify-content:space-between">

<!-- Form to edit a new produk -->
<form action="{{ url('produk/edit/' . $ubahproduk->kode_produk) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" required value='{{$ubahproduk->nama_produk}}'>
</div>

    <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control" required value='{{$ubahproduk->deskripsi}}'>
</div>

    <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" name="harga" class="form-control" required value='{{$ubahproduk->harga}}'>
</div>

    <div class="form-group">
    <label for="jumlah_produk">Jumlah Produk</label>
    <input type="text" name="jumlah_produk" class="form-control" required value='{{$ubahproduk->jumlah_produk}}'>
</div>

    <div class="form-group">
    <label for="image">Gambar</label>
    <input type="file" name="image" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</div>

 <!-- Footer -->
 <footer>
    <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>
    </body>
    </html>
