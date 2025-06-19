<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1 align="center" class="mt-4">Data Siswa</h1>
    <div class="d-flex justify-content-center mt-5">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data Siswa</a>
    </div>
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-center align-items-center">
            <table class="table table-striped" style="width: 35rem">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($siswa as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data['nama'] }}</td>
                            <td>{{ $data['kelas'] }}</td>
                            <td>
                                <form action="{{ route('siswa.destroy', $data['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('siswa.edit', $data['id']) }}" class="btn btn-success">Edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
</body>

</html>