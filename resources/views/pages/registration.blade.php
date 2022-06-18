@extends("layouts.app")

@section("content")
<div class="container-fluid mt-5 mb-5 registration-div">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <center>
                <h3 class="mb-5">রেজিস্ট্রেশন</h3>
            </center>
            <form action="{{url('store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="mobile" class="form-label">মোবাইল নাম্বার (১১ সংখ্যা এবং ইংরেজি)*</label>
                    <input type="number" id="mobile" name="mobile" class="form-control form-input shadow-none" placeholder="উদাহরণ:017XXXXXXXX">
                </div>
                @error("mobile")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="password" class="form-label">পাসওয়ার্ড (ইংরেজি)*</label>
                    <input name="password" type="password" class="form-control form-input shadow-none" name="password">
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                @error("password")
                <small class="text-danger"> {{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">পুনরায় পাসওয়ার্ড (ইংরেজি)*</label>
                    <input name="password_confirmation" type="password" class="form-control form-input shadow-none" name="password_confirmation">
                    <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <p class="form-p">*আপনার পাসওয়ার্ডে কমপক্ষে ৮টি অক্ষর থাকতে হবে।</p>
                <p class="form-p"> *আপনার পাসওয়ার্ড সম্পূর্ণরূপে সংখ্যাসূচক হতে পারবে না।</p>
                <p class="form-p"> *আপনার পাসওয়ার্ড আপনার অন্যান্য ব্যক্তিগত তথ্যের সাথে খুব বেশি মিল থাকতে পারবে না।</p>
                <p class="form-p"> *আপনার পাসওয়ার্ড সাধারণত ব্যবহৃত পাসওয়ার্ড হতে পারবে না।</p>
                <center>
                    <button type="submit" class="form-btn tex-center">সমর্পণ</button>
                </center>
            </form>
        </div>
    </div>
</div>
@endsection()