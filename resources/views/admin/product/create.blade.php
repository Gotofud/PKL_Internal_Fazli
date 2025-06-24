@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="mb-4">Create New Product</h1>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama') }}" required>
                @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
             <div class="mb-3">
                <label for="nama" class="form-label">Category Product </label>
                <select class="form-select mr-sm-2" id="inlineFormCustomSelect" name="kategori_id">
                    <option disabled selected>Choose...</option>
                    @foreach($categories as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
                @error('gambar')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Deskripsi Product </label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                    name="deskripsi" value="{{ old('deskripsi') }}" required>
                @error('deskripsi')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Harga Product </label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                    value="{{ old('harga') }}" required>
                @error('harga')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Stok Product </label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                    value="{{ old('stok') }}" required>
                @error('stok')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Gambar Product </label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar"
                    accept="image/*" required>
                @error('gambar')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Create product</button>
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary"><i class="ti ti-submit"></i>Back</a>
        </form>
@endsection