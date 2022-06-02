@extends("layouts.app")

@section("content")
<div class="container-fluid ">
    <div class="row  p-5" style="margin: 0px 115px ;">
        <div class="col-md-8 mt-5">
            <b> প্রশিক্ষণ কোর্স</b><br>
            <p>বাংলা</p><br>

            <p style="width: 50%;">লিখিত পরীক্ষায় উত্তীর্ণ প্রার্থীদের মৌখিক পরীক্ষায় অংশগ্রহণ করতে হবে। মৌখিক পরীক্ষার তারিখ ও বিস্তারিত সময়সূচি পরবর্তী সময়ে কমিশনের ওয়েবসাইট ও জাতীয় দৈনিক পত্রিকায় প্রকাশ করা হবে।</p>
            <br> <br><br>

            <button class="nav-btn"></button>
        </div>
        <div class="col-md-4"><img class="w-100 h-100" src="{{asset("images/notice.png")}}" alt=""></div>
    </div>
</div>
@endsection