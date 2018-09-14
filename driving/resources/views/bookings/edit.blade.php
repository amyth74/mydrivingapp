@extends('layouts.master')
@section('title','Edit Bookings')

@section('content')
    <div class="page-header">
        <h1>Edit Booking</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    {!! Form::open(['url' => 'admin/booking/'.$booking->id,'method'=>'put','files'=>true]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Enquiry')}}
                    <select name="enquiries_id" class="form-control">
                    
                        <option value="">Select Enquiry</option>
                        
                        @foreach($enquiries as $enquiry)
                            <option value="{{$enquiry->id}}"
                            @if($enquiry->id==$booking->enquiry->id){{'selected'}} @endif>
                            {{$enquiry->fullName()}}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->first('enquiries_id'))
                        <div class="label label-danger">
                            {{$errors->first('enquiries_id')}}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('fees')}}
                {{Form::text('fees',$booking->fees,['class'=>'form-control'])}}
                @if($errors->first('fees'))
                    <div class="label label-danger">
                        {{$errors->first('fees')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Advance')}}
                {{Form::text('advance',$booking->advance,['class'=>'form-control'])}}
                @if($errors->first('advance'))
                    <div class="label label-danger">
                        {{$errors->first('advance')}}
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                {{Form::Label('Timing')}}
                {{Form::text('timing',$booking->timing,['class'=>'form-control'])}}
                @if($errors->first('timing'))
                    <div class="label label-danger">
                        {{$errors->first('timing')}}
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-6">
               
            

               <label>Status</label><br/>
               {{ Form::checkbox('status','1',$booking->status) }}
               <label>Active</label><br/>
           </div>
            
        </div>

        
        
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/booking')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection