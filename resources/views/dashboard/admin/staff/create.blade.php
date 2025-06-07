@extends('dashboard.layouts.main')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between flex-wrap">
        <h5>Tambah Staff Baru</h5>
    </div>
    <div class="card-body">
        
    <div class="container">
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <form action="{{ route('dashboard.staff.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" required>
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">Email Staff</label>
                <input type="email" class="form-control" name="email" required>
            </div>
    
            <div class="mb-3">
                <label for="password" class="form-label">Password Default</label>
                <input type="password" class="form-control" name="password" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Tambah Staff</button>
        </form>
    </div>
</div>

</div>

@endsection
