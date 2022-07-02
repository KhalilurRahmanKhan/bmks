<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use File;


class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard/notices/index', [
            'notices' => Notice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/dashboard/notices/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'notice' => 'required',
        ]);
        $return_after_create = Notice::create([
            'notice' => $request->notice,
        ]);



        if ($request->hasFile('file')) {
            $uploaded_file = $request->file("file");
            $uploaded_file_new_name = $return_after_create->id . "." . $uploaded_file->extension();
            $request->file("file")->move('uploads/notice', $uploaded_file_new_name);

            $return_after_create->file = $uploaded_file_new_name;
            $return_after_create->save();
        }


        return back()->with('status', 'Record has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view("pages.dashboard.notices.edit", [
            'notice' => $notice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {

        if ($request->hasFile('file')) {

            $path = public_path("uploads/notice/" . $notice->file);

            if (File::exists($path)) {
                File::delete($path);
            }
            $notice->delete();
        }

        $notice->notice = $request->notice;
        $notice->save();

        if ($request->hasFile('file')) {


            $uploaded_file = $request->file("file");
            $uploaded_file_new_name = $notice->id . "." . $uploaded_file->extension();
            $request->file("file")->move('uploads/notice', $uploaded_file_new_name);

            $notice->file = $uploaded_file_new_name;
            $notice->save();
        }



        return redirect('notice')->with('status', 'Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {


        $path = public_path("uploads/notice/" . $notice->file);

        if (File::exists($path)) {
            File::delete($path);
        }

        $notice->delete();

        return back()->with('status', 'Record has been deleted');
    }




    public function status(Notice $notice)
    {

        $notice->active = !$notice->active;

        $notice->save();
        return back();
    }
}
