@extends('layouts.master')
@section('title','Edit Courses')

@section('content')
    <div class="page-header">
        <h1>Edit Courses</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    
    {!! Form::open(['url' => 'admin/course/'.$course->id,'method'=>'put','files'=>true]) !!}
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('First Name')}}
                {{Form::text('first_name',$course->first_name,['class'=>'form-control'])}}
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
                {{Form::text('last_name',$course->last_name,['class'=>'form-control'])}}
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
                {{Form::Label('Description')}}
                {{Form::text('description',$course->description,['class'=>'form-control'])}}
                @if($errors->first('description'))
                    <div class="label label-danger">
                        {{$errors->first('description')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Fees')}}
                {{Form::text('fees',$course->fees,['class'=>'form-control'])}}
                @if($errors->first('fees'))
                    <div class="label label-danger">
                        {{$errors->first('fees')}}
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Duration')}}
                {{Form::text('duration',$course->duration,['class'=>'form-control'])}}
                @if($errors->first('duration'))
                    <div class="label label-danger">
                        {{$errors->first('duration')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Duration Type ')}}
                {{Form::text('duration_type',$course->duration_type,['class'=>'form-control'])}}
                @if($errors->first('duration_type'))
                    <div class="label label-danger">
                        {{$errors->first('duration_type')}}
                    </div>
                @endif
                </div>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-md-6">
               
            

                <label>Status</label><br/>
                {{ Form::checkbox('status','1',$course->status) }}
                <label>Active</label><br/>
            </div>

        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/course')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection