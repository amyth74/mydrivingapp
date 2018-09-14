<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Enquiries;
use Illuminate\Http\Request;
use App\Http\Requests\BookingFormRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('bookings.index',[
            'bookings'=>Booking::all(),
            'enquiries'=>Enquiries::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create',[
            'enquiries'=>Enquiries::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingFormRequest $request)
    {
        $booking=new Booking();
        $booking->enquiries_id=$request->input('enquiries_id');
        $booking->fees=$request->input('fees');
        $booking->advance=$request->input('advance');
        $booking->timing=$request->input('timing');
        $booking->status=$request->input('status');
        $booking->save();

        return redirect('admin/booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $booking=Booking::findorFail($id);
        return view('bookings.edit',[
            'booking'=>$booking,
            'enquiries'=>Enquiries::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, Booking $booking)
    {
        $booking->enquiries_id=$request->input('enquiries_id');
        $booking->fees=$request->input('fees');
        $booking->advance=$request->input('advance');
        $booking->timing=$request->input('timing');
        $booking->status=$request->input('status');
        $booking->save();

        return redirect('admin/booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $booking=Booking::find($id);
        $booking->delete();
        return redirect('admin\booking');
    }
}
