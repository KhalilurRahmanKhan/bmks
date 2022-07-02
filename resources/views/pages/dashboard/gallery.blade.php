@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 p-3" style="border:1px solid black ;border-radius:10px;">
            <form action="{{url('gallery/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Images</label>
                    <input type="file" name="image[]" class="form-control" id="" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </div>
</div>
@endsection