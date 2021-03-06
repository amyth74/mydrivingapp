@extends('layouts.master')
@section('title','Create Enquiries')

@section('content')
    <div class="page-header">
        <h1>Create Enquiries</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    {!! Form::open(['url' => 'admin/enquiries','method'=>'post','files'=>true]) !!}
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('First Name')}}
                {{Form::text('first_name','',['class'=>'form-control'])}}
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
                {{Form::text('last_name','',['class'=>'form-control'])}}
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
                {{Form::Label('Email')}}
                {{Form::text('email','',['class'=>'form-control'])}}
                @if($errors->first('email'))
                    <div class="label label-danger">
                        {{$errors->first('email')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Contact No ')}}
                {{Form::text('contact','',['class'=>'form-control'])}}
                @if($errors->first('contact'))
                    <div class="label label-danger">
                        {{$errors->first('contact')}}
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Shift')}}
                {{Form::text('shift','',['class'=>'form-control'])}}
                @if($errors->first('shift'))
                    <div class="label label-danger">
                        {{$errors->first('shift')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Courses')}}
                    <select name="course_id" class="form-control">
                        <option value="">Select Course</option>
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">
                            {{$course->fullName()}}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->first('course_id'))
                        <div class="label label-danger">
                            {{$errors->first('course_id')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Timing')}}
                {{Form::text('timing','',['class'=>'form-control'])}}
                @if($errors->first('timing'))
                    <div class="label label-danger">
                        {{$errors->first('timing')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Date Of Birth')}}
                {{Form::date('dob','',['class'=>'form-control'])}}
                @if($errors->first('dob'))
                    <div class="label label-danger">
                        {{$errors->first('dob')}}
                    </div>
                @endif
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Remarks')}}
                {{Form::textarea('remarks','',['class'=>'form-control'])}}
                @if($errors->first('remarks'))
                    <div class="label label-danger">
                        {{$errors->first('remarks')}}
                    </div>
                @endif
                </div>
            </div>
            

                <label>Status</label><br/>
                {{ Form::checkbox('status','1','') }}
                <label>Active</label><br/>
            

        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/enquiries')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection