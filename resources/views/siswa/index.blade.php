<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .main-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid #e9ecef;
            border-radius: 16px 16px 0 0 !important;
            padding: 2rem 2rem 1rem;
        }
        
        .page-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #212529;
            margin: 0;
        }
        
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-1px);
        }
        
        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 6px;
        }
        
        .btn-outline-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }
        
        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
            color: #495057;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 1.5rem;
            background: #f8f9fa;
        }
        
        .table tbody td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f3f4;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .student-number {
            width: 32px;
            height: 32px;
            background-color: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            font-size: 0.875rem;
            color: #6c757d;
        }
        
        .student-name {
            font-weight: 500;
            color: #212529;
        }
        
        .student-class {
            background-color: #e7f3ff;
            color: #0066cc;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .alert {
            border: none;
            border-radius: 12px;
            padding: 1rem 1.5rem;
        }
        
        .alert-success {
            background-color: #d1edff;
            color: #0066cc;
        }
        
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        
    </style>
</head>

<body>
    <div class="main-container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="page-title">
                    <i class="bi bi-people me-2"></i>Data Siswa
                </h1>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i>Tambah Siswa
                </a>
            </div>
            
            <div class="card-body p-0">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                        <i class="bi bi-x me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 80px">No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th style="width: 200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($siswa as $data)
                                <tr>
                                    <td>
                                        <div class="student-number">{{ $no++ }}</div>
                                    </td>
                                    <td class="student-name">{{ $data['nama'] }}</td>
                                    <td>
                                        <span class="student-class">{{ $data['kelas'] }}</span>
                                    </td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="{{ route('siswa.edit', $data['id']) }}" class="btn btn-warning btn-sm text-white">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('siswa.destroy', $data['id']) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>