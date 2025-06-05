@extends('layouts.main')

@section('title')
    Resto App | Detail Pesanan
@endsection

@section('content')
    <div class="container mb-5 mt-5">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Detail Pesanan</h2>

        <div class="card mb-3">
            <div class="card-body">
                <h5>Meja: #{{ $order->table->number }}</h5>
                <p>Status: <strong>{{ ucfirst($order->status) }}</strong></p>
                <p>Metode Pembayaran: {{ strtoupper($order->payment_method) }}</p>
                <p>Waktu Order: {{ $order->created_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <h4>Item Pesanan:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr>
                        <td>{{ $item->menu->name }}</td>
                        <td>Rp{{ number_format($item->menu->price, 0, ',', '.') }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rp{{ number_format($item->menu->price * $item->quantity, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <th>Rp{{ number_format($order->total_amount, 0, ',', '.') }}</th>
                </tr>
            </tfoot>
        </table>


        <h4>QR Pembayaran:</h4>
        <div class="mb-3">
            <img src="{{ asset('images/qris.png') }}" alt="QRIS" style="max-width: 300px;">
            <p>Silakan scan QR ini menggunakan aplikasi e-wallet Anda.</p>
        </div>

        @if ($order->status === 'pending')
            <form action="{{ route('order.markPaid', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Sudah Bayar</button>
            </form>
        @else
            <div class="alert alert-success">
                ✅ Pesanan ini telah dibayar.
            </div>
        @endif

        <a href="{{ route('order.index') }}" class="btn mt-5 btn-secondary">Kembali ke Daftar Pesanan</a>

    </div>
@endsection
