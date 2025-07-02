@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                    &larr; Kembali Halaman Awal
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Pesanan Saya</h2>

                @if($orders->isEmpty())
                    <div class="alert alert-info">
                        Anda belum memiliki pesanan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Pesanan</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah Item</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                                        <td>{{ $order->orderProduct->sum('quantity') }}</td>
                                        <td>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                                        <td>
                                            <span class="badge {{ $order->status == 'completed' ? 'bg-success' : 'bg-primary' }}">
                                                {{ $order->status == 'completed' ? 'Selesai' : 'Menunggu Pembayaran' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('orders.detail', $order->id) }}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection