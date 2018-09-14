<?php

namespace App\Http\Controllers;

use App\Enquiries;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\EnquiryFormRequest;

class EnquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('enquiries.index',[
            'enquiries'=>Enquiries::all(),
            'course'=>Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enquiries.create',[
            'courses'=>Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquiryFormRequest $request)
    {
        $enquiry=new Enquiries();
        $enquiry->first_name=$request->input('first_name');
        $enquiry->last_name=$request->input('last_name');
        $enquiry->email=$request->input('email');
        $enquiry->contact=$request->input('contact');
        $enquiry->shift=$request->input('shift');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->timing=$request->input('timing');
        $enquiry->dob=$request->input('dob');
        $enquiry->remarks=$request->input('remarks');
        $enquiry->status=$request->input('status');
        $enquiry->save();

        return redirect('admin/enquiries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiries $enquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $enquiry=Enquiries::findorFail($id);
        return view('enquiries.edit',[
            'enquiry'=>$enquiry,
            'courses'=>Course::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function update(EnquiryFormRequest $request, Enquiries $enquiry)
    {
        $enquiry->first_name=$request->input('first_name');
        $enquiry->last_name=$request->input('last_name');
        $enquiry->email=$request->input('email');
        $enquiry->contact=$request->input('contact');
        $enquiry->shift=$request->input('shift');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->timing=$request->input('timing');
        $enquiry->dob=$request->input('dob');
        $enquiry->remarks=$request->input('remarks');
        $enquiry->status=$request->input('status');
        $enquiry->save();

        return redirect('admin/enquiries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $enquiry=Enquiries::find($id);
        $enquiry->delete();
        return redirect('admin\enquiries');
    }
}
