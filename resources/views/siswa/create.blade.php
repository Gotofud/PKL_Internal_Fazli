<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

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

        @media (max-width: 768px) {
            .main-container {
                margin: 1rem auto;
                padding: 0 0.5rem;
            }

            .card-header {
                padding: 1.5rem 1rem 1rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-sm {
                padding: 0.375rem 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label>Kelas : </label>
                                <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
                                @error('kelas')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary" name="save">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>