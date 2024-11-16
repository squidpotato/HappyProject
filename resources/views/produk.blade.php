<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
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
        <header style="display: flex; justify-content: space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan Anda</p>
            </div>
            <div>
            <button class="card-button"><a class="text-decoration-none text-wh" href="{{ url('/produk/add')}}">Add Product</a></button>
            </div>
        </header>

<!-- Product Grid -->
<div class="product-grid">
<!-- Product Card 1 -->
@foreach ($produk as $item)
<div class="product-card">
    <img src="{{ url('storage/public/images/' . $item->image) }}" alt="Produk 1">
    {{-- <img src="https://via.placeholder.com/200" alt="Produk 1"> --}}
    <h3>{{ $item->nama_produk }}</h3>
    <p class="price">{{ $item->harga }}</p>
    <p class="description">{{ $item->deskripsi }}</p>
    <div style ="display: flex; justify-content: center">
    <a class="btn btn-success mr-2" href="{{ url('produk/edit/' . $item->kode_produk) }}"> Edit</a>
    <button class="add-to-cart">+</button>
    <button class="cancel-to-cart">-</button>
    {{-- <button class="card-button"> Edit </button> --}}
    {{-- <button class="card-button"> Delete </button> --}}
    <div style ="display: flex; justify-content: center">
    <a class="btn btn-success mr-2" href="{{ url('produk/edit/' . $item->kode_produk) }}"> Edit</a>
    <form action="{{ url('produk/delete/'. $item->kode_produk) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endforeach
<div class="product-card">
    <img src="https://via.placeholder.com/200" alt="Produk 2">
    <h3>Produk 2</h3>
    <p class="price">Rp 200,000</p>
    <p class="description">Deskripsi singkat produk 2.</p>
    <button class="add-to-cart">+</button>
    <button class="cancel-to-cart">-</button>
</div>

<!-- Product Card 2 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/200" alt="Produk 2">
            <h3>Produk 2</h3>
            <p class="price">Rp 200,000</p>
            <p class="description">Deskripsi singkat produk 2.</p>
            <button class="add-to-cart">+</button>
            <button class="cancel-to-cart">-</button>
        </div>

    <!-- Product Card 3 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Produk 3">
        <h3>Produk 3</h3>
        <p class="price">Rp 300,000</p>
        <p class="description">Deskripsi singkat produk 3.</p>
        <button class="add-to-cart">+</button>
        <button class="cancel-to-cart">-</button>
    </div>

    <!-- Product Card 4 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Produk 4">
        <h3>Produk 4</h3>
        <p class="price">Rp 400,000</p>
        <p class="description">Deskripsi singkat produk 4.</p>
        <button class="add-to-cart">+</button>
        <button class="cancel-to-cart">-</button>
    </div>

      <!-- Footer -->
  <footer>
    <p>© 2024 Aplikasi Penjualan. All rights reserved.</p>
  </footer>
