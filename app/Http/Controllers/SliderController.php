<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
    public function index()
    {
        return view('pages/dashboard/slider');
    }
    public function store(Request $request)
    {
       $slider = Slider::first();

        if ($request->hasFile('slide1')) {
            $path = public_path("uploads/slider/". $slider->slide1);

            if (File::exists($path)) {
                File::delete($path);
            }
            $slider->delete();
        }
        if ($request->hasFile('slide2')) {
            $path = public_path("uploads/slider/". $slider->slide2);

            if (File::exists($path)) {
                File::delete($path);
            }
            $slider->delete();
        }
        if ($request->hasFile('slide3')) {
            $path = public_path("uploads/slider/". $slider->slide3);

            if (File::exists($path)) {
                File::delete($path);
            }
            $slider->delete();
        }


        if ($request->hasFile('slide1')) {
            $uploaded_file = $request->file("slide1");
            $uploaded_file_new_name = "slide1". "." . $uploaded_file->extension();
            $request->file("slide1")->move('uploads/slider', $uploaded_file_new_name);
            $slider->slide1 = $uploaded_file_new_name;
            $slider->save();
        }
        if ($request->hasFile('slide2')) {
            $uploaded_file = $request->file("slide2");
            $uploaded_file_new_name = "slide2" . "." . $uploaded_file->extension();
            $request->file("slide2")->move('uploads/slider', $uploaded_file_new_name);
            $slider->slide2 = $uploaded_file_new_name;
            $slider->save();
        }
        if ($request->hasFile('slide3')) {
            $uploaded_file = $request->file("slide3");
            $uploaded_file_new_name = "slide3" . "." . $uploaded_file->extension();
            $request->file("slide3")->move('uploads/slider', $uploaded_file_new_name);
            $slider->slide3 = $uploaded_file_new_name;
            $slider->save();
        }



        return back();
    }
  
}
