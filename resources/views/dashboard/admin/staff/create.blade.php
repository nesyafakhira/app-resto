@extends('dashboard.layouts.main')

@section('content')
<div class="col-xl-9 col-lg-8">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">New User Information</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="new-user-info">
                <form>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="pno">Password:</label>
                            <input type="text" class="form-control" id="pno" placeholder="Pin Code">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add New User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
