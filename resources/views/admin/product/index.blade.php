@extends('layouts.admin')
@section('content')
    <div class="table-responsive">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Tambah Produk</a>
        <table class="table">
            <thead class="bg-inverse table-primary">
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Slug</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $data->gambar) }}" class="rounded-2" width="42" height="42"></td>  
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->category->nama }}</td>
                        <td>
                            <form action="{{ route('admin.product.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.product.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection