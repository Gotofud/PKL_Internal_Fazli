@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-12">
                <a href="{{ route('orders.my') }}" class="btn btn-outline-secondary">
                    &larr; Kembali ke Daftar Pesanan
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Detail Pesanan #{{ $order->id }}</h5>
                        @if ($order->status === 'completed')
                            <span class="badge bg-success">Selesai</span>
                        @else
                            <span class="badge bg-primary">Menunggu Pembayaran</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-6"><strong>Tanggal Pesanan:</strong></div>
                            <div class="col-md-6">{{ $order->created_at->format('d M, Y H:i') }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6"><strong>Status Pesanan:</strong></div>
                            <div class="col-md-6">
                                @if ($order->status === 'completed')
                                    <span class="text-success">Selesai | Menunggu Pembayaran</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0">Produk yang Dipesan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderProduct as $item)
                                        <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>
                                                @if ($item->product->gambar)
                                                    <img src="{{ asset('storage/' . $item->product->gambar) }}"
                                                        alt="{{ $item->product->name }}" class="img-thumbnail" width="80">
                                                @else
                                                    <div class="text-center p-2" style="width: 80px; height: 80px;">
                                                        Tidak Ada Gambar
                                                    </div>
                                                @endif
                                                {{ number_format($item->product->harga, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                @if ($order->status === 'pending')
                                                    <form action="{{ route('order.update-quantity') }}" method="POST"
                                                        class="d-flex align-items-center">
                                                        @csrf
                                                        <input type="hidden" name="order_product_id" value="{{ $item->id }}">
                                                        <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                            max="{{ $item->product->stok }}" class="form-control form-control-sm"
                                                            style="width: 60px;">
                                                        <button type="submit" class="btn btn-outline-primary ms-2">Perbarui</button>
                                                    </form>
                                                    <small class="text-muted d-block mt-1">Tersedia:
                                                        {{ $item->product->stok }}</small>
                                                @else
                                                    {{ $item->quantity }}
                                                @endif
                                            </td>
                                            <td>{{ number_format($item->subtotal, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($order->status === 'pending')
                                                    <form action="{{ route('order.remove-item') }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="order_product_id" value="{{ $item->id }}">
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                        <td><strong>{{ number_format($order->total_harga, 0, ',', '.') }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Ringkasan Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Jumlah Item
                                <span>{{ $order->orderProduct->sum('quantity') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Harga
                                <span>{{ number_format($order->total_harga, 0, ',', '.') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Status Pesanan
                                <span>
                                    @if ($order->status === 'completed')
                                        <span class="badge bg-success">Selesai</span>
                                    @else
                                        <span class="badge bg-primary">Menunggu Pembayaran</span>
                                    @endif
                                </span>
                            </li>
                        </ul>
                        @if ($order->status === 'pending')
                            <form action="{{ route('checkout') }}" method="POST" class="mt-3">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit" class="btn btn-primary w-100">Bayar Sekarang</button>
                            </form>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection