@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 p-3" style="border:1px solid #ddd1d1 ;border-radius:10px;">
            <form action="{{url('notice')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Notice</label>
                    <textarea name="notice" id="editor1" class="form-control" cols="30" rows="10"></textarea>
                </div>
                @error("notice")
                {{$message}}
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label">File</label>
                    <input type="file" name="file" class="form-control" id="">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </div>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
            ClassicEditor.create(document.querySelector('#editor1'))
            .catch(error=>{
                console.log(error);
            });
    </script>
</div>
@endsection