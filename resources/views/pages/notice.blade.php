@extends("layouts.app")

@section("content")
<div class="container-fluid ">
    <div class="row  p-5" >
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
           <div class="p-5  m-5">
           @php
            echo(App\Models\Notice::orderBy('created_at', 'desc')->first()->notice);
           @endphp
           </div>

            <div>
            <a href="{{asset('uploads/notice')}}/{{App\Models\Notice::orderBy('created_at', 'desc')->first()->file;}}" download><button class=" btn btn-primary">Download</button></a>
            </div>
        </div>
        <div class="col-md-4"><img class="w-100 h-100" src="{{asset("images/notice.png")}}" alt=""></div>
    </div>
</div>
@endsection