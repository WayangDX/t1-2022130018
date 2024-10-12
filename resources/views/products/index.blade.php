@extends('layouts.template')

@section('title', 'Daftar Product')

@section('body')
    <div class="container mt-5">
        <h2 class="mb-4 text-primary">Daftar Product</h2>

        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Tambah Product</a>

        <table class="table table-bordered table-hover table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga Eceran</th>
                    <th>Harga Grosir</th>
                    <th>Asal</th>
                    <th>Kuantitas</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ number_format($product->retail_price, 0, ',', '.') }}</td>
                        <td>{{ number_format($product->wholesale_price, 0, ',', '.') }}</td>
                        <td>{{ $product->origin }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="Gambar Product" class="img-thumbnail" width="100">
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Tidak ada data product yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
