<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseFormRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index',[
            'courses'=>Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
        $course=new Course();
        $course->first_name=$request->input('first_name');
        $course->last_name=$request->input('last_name');
        $course->description=$request->input('description');
        $course->fees=$request->input('fees');
        $course->duration=$request->input('duration');
        $course->duration_type=$request->input('duration_type');
        $course->status=$request->input('status');
        $course->save();

        return redirect('admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $course=Course::findorFail($id);
        return view('courses.edit',[
            'course'=>$course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseFormRequest $request, Course $course)
    {
        $course->first_name=$request->input('first_name');
        $course->last_name=$request->input('last_name');
        $course->description=$request->input('description');
        $course->fees=$request->input('fees');
        $course->duration=$request->input('duration');
        $course->duration_type=$request->input('duration_type');
        $course->status=$request->input('status');
        $course->save();

        return redirect('admin/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $course=Course::find($id);
        $course->delete();
        return redirect('admin\course');
    }
}
