<?php

namespace App\Http\Controllers;

use App\Trainers;
use Illuminate\Http\Request;
use App\Http\Requests\TrainerFormRequest;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trainers.index',[
            'trainers'=>Trainers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerFormRequest $request)
    {
        $trainer=new Trainers();
        $trainer->first_name=$request->input('first_name');
        $trainer->last_name=$request->input('last_name');
        $trainer->mobileno=$request->input('mobileno');
        $trainer->email=$request->input('email');
        $trainer->status=$request->input('status');
        $trainer->save();

        return redirect('admin/trainers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function show(Trainers $trainers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $trainer=Trainers::findorFail($id);
        return view('trainers.edit',[
            'trainer'=>$trainer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function update(TrainerFormRequest $request, Trainers $trainer)
    {
        $trainer->first_name=$request->input('first_name');
        $trainer->last_name=$request->input('last_name');
        $trainer->mobileno=$request->input('mobileno');
        $trainer->email=$request->input('email');
        $trainer->status=$request->input('status');
        $trainer->save();

        return redirect('admin/trainers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $trainer=Trainers::find($id);
        $trainer->delete();
        return redirect('admin\trainers');
    }
}
