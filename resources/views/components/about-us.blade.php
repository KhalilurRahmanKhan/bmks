<div class="container"> 
    <div class="row gap-2 justify-content-center m-5">
        <h1 class="text-center mb-3">আমাদের সম্পর্কে</h1>
        @foreach(App\Models\Gallery::all() as $image)
        <div class="col-md-3  "><img class="w-100 h-100 " src="{{asset('uploads/gallery')}}/{{$image->image}}" alt=""></div>
        @endforeach
    </div>
</div>