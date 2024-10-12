@extends('layouts.template')

@section('title', 'Detail Produk')

@section('body')
<div class="container mt-5">
    <h2 class="mb-4">Detail Produk</h2>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="Gambar Produk" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                    <h3>{{ $product->product_name }}</h3>
                    <p><strong>ID:</strong> {{ $product->id }}</p>
                    <p><strong>Harga Eceran:</strong> Rp {{ number_format($product->retail_price, 0, ',', '.') }}</p>
                    <p><strong>Harga Grosir:</strong> Rp {{ number_format($product->wholesale_price, 0, ',', '.') }}</p>
                    <p><strong>Asal:</strong> {{ $product->origin }}</p>
                    <p><strong>Kuantitas:</strong> {{ $product->quantity }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
        </form>
    </div>
</div>
@endsection
