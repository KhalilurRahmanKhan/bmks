<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Project;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view("pages.dashboard.courses.index",[
            'courses'=>Course::all(),
        ]);
    }
    public function create()
    {
         return view("pages.dashboard.courses.create",[
             'projects'=>Project::all(),
         ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'project_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        Course::create([
            'project_id' => $request->project_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
    

        return back()->with('status', 'Data has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("pages.dashboard.courses.edit",[
            'course'=>$course,
            'projects'=>Project::where('id','!=',$course->project_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->project_id=$request->project_id;
        $course->title=$request->title;
        $course->description=$request->description;
        $course->save();
        return redirect('course')->with('status','Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return back()->with('status','Record has been deleted');
    }
}
