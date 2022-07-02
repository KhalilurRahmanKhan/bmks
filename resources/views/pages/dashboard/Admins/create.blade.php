@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row  justify-content-center">
        <h3>Admin > Create</h3>
        <div class="col-md-6 p-3" style="border:1px solid #ddd1d1 ;border-radius:10px;">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{url('admin/store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label"><b>Username</b></label>
                    <input type="text" name="username" class="form-control">
                </div>
                @error("username")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label"><b>Mobile</b></label>
                    <input type="number" name="mobile" class="form-control">
                </div>
                @error("mobile")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label"><b>Password</b></label>
                    <input type="password" name="password" class="form-control">
                </div>
                @error("password")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <input type="text" name="role" value="admin" hidden>

                <div>
                    <button type="submit" class="btn btn-primary mt-0">Add</button>
                </div>
        </div>


    </div>


</div>
@endsection