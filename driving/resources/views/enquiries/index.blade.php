@extends('layouts.master')
@section('title','Enquiries')

@section('content')
    <div class="page-header">
        <h1>Enquiries</h1>
        
    </div>
    <div class="pull-right">
        <p>
            <a href="{{url('admin/enquiries/create')}}" class="btn btn-primary btn-xs" title="Add Enquiry">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Shift</th>
            <th>Course Id</th>
            <th>Timing</th>
            <th>DOB</th>
            <th>Remarks</th>
            <th>Status</th>            
            <th>Action</th>
        </tr>
        @foreach($enquiries as $enquiry)
            <tr>
                <td>{{$enquiry->id}}</td>
                <td>{{$enquiry->first_name}} {{$enquiry->last_name}}</td>
                <td>{{$enquiry->email}}</td>
                <td>{{$enquiry->contact}}</td>
                <td>{{$enquiry->shift}}</td>
                <td>{{$enquiry->course->first_name}} {{$enquiry->course->last_name}}</td>
                <td>{{$enquiry->timing}}</td>
                <td>{{$enquiry->dob}}</td>
                <td>{{$enquiry->remarks}}</td>
                <td>
                    @if($enquiry->status)
                        <label class="label label-success">Active</label>
                    @else
                        <label class="label label-danger">Inactive</label>
                    @endif
                    
                </td>
                <td>
                    <form method="post" action="{{url('admin/enquiries/'.$enquiry->id)}}">
                        <a href="{{url('admin/enquiries/'.$enquiry->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit Enquiry">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></span>
               
                        </button>
                        
                    </form>
                </td>
                
            </tr>
        @endforeach
    </table>
@endsection