@extends('dashboard.layouts.main')

@section('content')
    <h2 class="mb-4">Konfirmasi Transaksi</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Meja</th>
                <th>Order Name</th>
                <th>Status</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Meja #{{ $order->table->number }}</td>
                    <td>{{ $order->order_name }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('dashboard.transactions.confirm', $order->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">
                                @if ($order->status === 'paid') Confirm
                                @else -
                                @endif
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada transaksi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection