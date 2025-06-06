@extends('dashboard.layouts.main')

@section('content')
    <h2 class="mb-4">Update Status Meja</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($tables as $table)
            <div class="col-md-4">
                <div class="card border-{{ $table->is_full ? 'danger' : 'success' }} mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Meja #{{ $table->number }}</h5>
                        <p class="card-text text-{{ $table->is_full ? 'danger' : 'success' }}">
                            Status: {{ $table->is_full ? 'Penuh' : 'Kosong' }}
                        </p>

                        @if ($table->is_full)
                            <form action="{{ route('dashboard.tables.clear', $table->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning w-100">Kosongkan Meja</button>
                            </form>
                        @else
                            <button class="btn btn-secondary w-100" disabled>Sudah Kosong</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection