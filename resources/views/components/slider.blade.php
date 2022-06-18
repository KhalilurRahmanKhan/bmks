<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('uploads/slider')}}/{{App\Models\Slider::first()->slide1}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('uploads/slider')}}/{{App\Models\Slider::first()->slide2}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('uploads/slider')}}/{{App\Models\Slider::first()->slide3}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <div class="slider-overlay">
    <button class="overlay-btn-blue"><span>নিবন্ধন</span> </button>
    <button class="overlay-btn-transparent">আবেদন </button>
  </div>
</div>