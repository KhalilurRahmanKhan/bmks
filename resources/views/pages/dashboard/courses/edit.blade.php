@extends("layouts.dashboard")
@section("dashboard_content")
<div class="container">
    <div class="row  justify-content-center">
        <h3>Course > Edit</h3>
        <div class="col-md-6 p-3" style="border:1px solid black ;border-radius:10px;">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
         {{ session('status') }}
            </div>
            @endif
            <form action="{{url('course')}}/{{$course->id}}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="" class="form-label"><b>Project</b></label><br>
                    <select class="text-center form-control" name="project_id" id="">
                        <option value="{{$course->project_id}}">{{$course->project->title}}</option>
                        @foreach($projects as $project)
                        <option value="{{$project->id}}">{{$project->title}}</option>
                        @endforeach
                    </select>
                </div>
                @error("project_id")
                <small class="text-danger">Select a project</small>
                @enderror

                <div class="mb-3">
                    <label for="" class="form-label"><b>Title</b></label>
                    <input type="text" value="{{$course->title}}" name="title" class="form-control">
                </div>
                @error("title")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label"><b>Description</b></label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$course->description}}</textarea>
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