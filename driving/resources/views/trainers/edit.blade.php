@extends('layouts.master')
@section('title','Edit Trainers')

@section('content')
    <div class="page-header">
        <h1>Edit Trainers</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    
    {!! Form::open(['url' => 'admin/trainers/'.$trainer->id,'method'=>'put','files'=>true]) !!}
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('First Name')}}
                {{Form::text('first_name',$trainer->first_name,['class'=>'form-control'])}}
                @if($errors->first('first_name'))
                    <div class="label label-danger">
                        {{$errors->first('first_name')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Last Name')}}
                {{Form::text('last_name',$trainer->last_name,['class'=>'form-control'])}}
                @if($errors->first('last_name'))
                    <div class="label label-danger">
                        {{$errors->first('last_name')}}
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Contact No ')}}
                {{Form::text('mobileno',$trainer->mobileno,['class'=>'form-control'])}}
                @if($errors->first('mobileno'))
                    <div class="label label-danger">
                        {{$errors->first('mobileno')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Email')}}
                {{Form::text('email',$trainer->email,['class'=>'form-control'])}}
                @if($errors->first('email'))
                    <div class="label label-danger">
                        {{$errors->first('email')}}
                    </div>
                @endif
                </div>
            </div>
            
        </div>
        <div>
            

                <label>Status</label><br/>
                {{ Form::checkbox('status','1',$trainer->status) }}
                <label>Active</label><br/>
            

        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/trainers')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection