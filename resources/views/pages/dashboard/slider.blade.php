@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 p-3" style="border:1px solid black ;border-radius:10px;">
            <form action="{{url('slider/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Slide No 1</label>
                    <input type="file" name="slide1" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slide No 2</label>
                    <input type="file" name="slide2" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slide No 3</label>
                    <input type="file" name="slide3" class="form-control" id="">
                </div>
            
                <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </div>
</div>
@endsection