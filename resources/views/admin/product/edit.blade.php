@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Product</h1>
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ $product->nama }}" required>
                @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Category Product </label>
                <select class="form-select mr-sm-2" id="inlineFormCustomSelect" name="kategori_id">
                    <option disabled selected>Choose...</option>
                    @foreach($categories as $data)
                        <option value="{{ $data->id }}" {{ $product->kategori_id == $data->id ? 'selected' : '' }}>
                            {{ $data->nama }}
                        </option>
                    @endforeach
                </select>
                @error('gambar')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Deskripsi Product </label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                    name="deskripsi" value="{{ $product->deskripsi }}" required>
                @error('deskripsi')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Harga Product </label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                    value="{{ $product->harga }}" required>
                @error('harga')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Stok Product </label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                    value="{{ $product->stok }}" required>
                @error('stok')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <img src="{{ asset('storage/' . $product->gambar) }}" class="rounded" width="100" height="150">
                   <small class="text-muted">
                    Kosongkan jika tidak ingin mengubah gambar!
                </small>
            </div>
            <div class="mb-3">
                
                <label for="nama" class="form-label">Gambar Product </label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar"
                    accept="image/*">
                @error('gambar')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit product</button>
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary"><i class="ti ti-submit"></i>Back</a>
        </form>
@endsection