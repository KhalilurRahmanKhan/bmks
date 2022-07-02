@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row  justify-content-center">
        <h3>Project > Create</h3>
        <div class="col-md-6 p-3" style="border:1px solid #ddd1d1 ;border-radius:10px;">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
         {{ session('status') }}
            </div>
            @endif
            <form action="{{url('project')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label"><b>Title</b></label>
                    <input type="text" name="title" class="form-control">
                </div>
                @error("title")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label"><b>Description</b></label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                @error("description")
                <small class="text-danger"> {{$message}}</small>
                @enderror

                <div>
                    <button type="submit" class="btn btn-primary mt-0">Add</button>
                </div>
        </div>


    </div>
 

</div>
@endsection