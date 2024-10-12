@extends('layouts.template')

@section('title', 'Create New Product')

@section('body')

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Create New Product</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>ID:</label>
                    <input type="text" name="id" required class="form-control @error('id') is-invalid @enderror">
                    @error('id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Product:</label>
                    <input type="text" name="product_name" required class="form-control @error('product_name') is-invalid @enderror">
                    @error('product_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Harga Eceran:</label>
                    <input type="number" name="retail_price" required class="form-control @error('retail_price') is-invalid @enderror">
                    @error('retail_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Harga Grosir:</label>
                    <input type="number" name="wholesale_price" required class="form-control @error('wholesale_price') is-invalid @enderror">
                    @error('wholesale_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kode Negara:</label>
                    <input type="text" name="origin" required class="form-control @error('origin') is-invalid @enderror">
                    @error('origin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number" name="quantity" required class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
                <button type="reset" class="btn btn-secondary btn-block btn-lg">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection
