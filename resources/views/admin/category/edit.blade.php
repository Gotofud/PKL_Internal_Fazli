@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="mb-4">Edit Category</h1>
    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $category->nama  }}" required>
            @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
        <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection