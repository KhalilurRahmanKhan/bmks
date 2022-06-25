<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages/dashboard/gallery');
    }
    public function store(Request $request)
    {
        $gallery = new Gallery;

        if ($request->hasFile('image')) {
            $path = public_path("uploads/gallery/");
                File::delete($path);
                Gallery::truncate();
        }







        if ($request->hasFile('image')) {
            for($i=0; $i<count($request->image); $i++){
                $uploaded_file = $request->file('image')[$i];
                $uploaded_file_new_name = $i. "." . $uploaded_file->extension();
                $request->file("image")[$i]->move('uploads/gallery', $uploaded_file_new_name);
                Gallery::create([
                    'image' => $uploaded_file_new_name,
                ]);
            }
          
        }
     
        return back();
    }
  
}
