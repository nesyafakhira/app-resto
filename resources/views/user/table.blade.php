@extends('layouts.main')

@section('title')
    App Resto | Meja
@endsection


@section('content')
<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">

    <div class="container py-5">
        <h1 class="mb-4 text-center">Pilih Meja Restoran</h1>
        <div class="row g-4">

            @foreach ($tables as $table)
            <div class="col-md-4 mb-4">
                <div class="card border-{{ !$table->is_full ? 'success' : 'danger' }}">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Brush Script MT', cursive;">
                            Meja #{{ $table->number }}
                        </h5>

                        <p class="card-text text-{{ !$table->is_full ? 'success' : 'danger' }}">
                            Status: {{ !$table->is_full ? 'Kosong' : 'Sudah Penuh' }}
                        </p>

                        @if (!$table->is_full)
                            <a href="{{ route('menu.create.with.table', $table->id) }}" class="btn btn-primary w-100">Pilih Meja</a>
                        @else
                            <button class="btn btn-secondary w-100" disabled>
                                Sudah Penuh
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

@endsection