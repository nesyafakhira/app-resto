@extends('dashboard.layouts.main')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between flex-wrap">
        <h5>Tambah Menu Baru</h5>
    </div>
    <div class="card-body">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="price" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipe</label>
                    <select name="type" class="form-control" required>
                        <option value="food">Makanan</option>
                        <option value="drink">Minuman</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-success">Tambah Menu</button>
            </form>
        </div>

    </div>
</div>
@endsection
