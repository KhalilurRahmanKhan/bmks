@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row  justify-content-center">
        <h3>Notice > Edit</h3>
        <div class="col-md-6 p-3" style="border:1px solid black ;border-radius:10px;">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
         {{ session('status') }}
            </div>
            @endif
            <form action="{{url('notice')}}/{{$notice->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="" class="form-label">Notice</label>
                    <textarea name="notice"  id="editor1" class="form-control" cols="30" rows="10">{{$notice->notice}}</textarea>
                </div>
                @error("notice")
                {{$message}}
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label">File</label>
                    <input type="file" name="file" class="form-control" id="">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-0">Add</button>
                </div>
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