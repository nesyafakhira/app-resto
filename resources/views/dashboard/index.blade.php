@extends('dashboard.layouts.main')

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card overflow-hidden">
            <div class="card-header d-flex justify-content-between flex-wrap">
                <h5>Main Menu</h5>
            </div>
            <div class="card-body p-3">
                <div class="container">


                    @role('admin')
                    <div class="row">
                        <div class="card col-6">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <h5>Tambah Staff</h5>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('dashboard.staff.create') }}" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                        <div class="card col-6">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <h5>Tambah Menu</h5>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('dashboard.menu.create') }}" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>

                    </div>

                    @endrole


                    @role('staff')
                    <div class="row">
                        <div class="card col-6">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <h5>Konfirmasi Transaksi</h5>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('dashboard.transactions.index') }}" class="btn btn-primary">Konfirmasi</a>
                            </div>
                        </div>
                        <div class="card col-6">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <h5>Update Status Meja</h5>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('dashboard.tables.index') }}" class="btn btn-primary">Update</a>
                            </div>
                        </div>

                    </div>

                    @endrole

                </div>
            </div>
        </div>
    </div>
@endsection