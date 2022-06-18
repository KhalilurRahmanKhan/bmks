@extends("layouts.app")

@section("content")
<div class="container-fluid mt-5 mb-5 registration-div">
    <div class="row justify-content-center">
        <div class="col-md-5 login-div">
            <center>
                <h3 class="mb-3">লগ ইন</h3>
            </center>
            <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="number" id="mobile" name="mobile" class="form-control form-input shadow-none" placeholder="মোবাইল নাম্বার">
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control form-input shadow-none" name="password" placeholder="পাসওয়ার্ড
                            ">
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <div class="row justify-content-between mt-5">
                    <div class="col-md-6 d-flex justify-content-start align-items-center"><p class="form-p"><a href="registration" class="text-decoration-none">এখানে ক্লিক করে রেজিস্ট্রেশন করুন।</a></p></div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center" ><button type="submit" class="form-btn tex-center f-right">সমর্পণ</button></div>
                   
                </div>




            </form>
        </div>
    </div>
</div>
@endsection()