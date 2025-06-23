@extends('layouts.admin')
@section('content')
    <div class="table-responsive">
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Tambah Category</a>
        <table class="table">
            <thead class="bg-inverse table-primary">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                            <form action="{{ route('admin.category.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.category.edit', $data->id) }}" class="btn btn-warning">Edit</a>
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