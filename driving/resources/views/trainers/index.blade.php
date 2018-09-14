@extends('layouts.master')
@section('title','Trainers')

@section('content')
    <div class="page-header">
        <h1>Trainers</h1>
        
    </div>
    <div class="pull-right">
        <p>
            <a href="{{url('admin/trainers/create')}}" class="btn btn-primary btn-xs" title="Add Enquiry">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Status</th>            
            <th>Action</th>
        </tr>
        @foreach($trainers as $trainer)
            <tr>
                <td>{{$trainer->id}}</td>
                <td>{{$trainer->first_name}} {{$trainer->last_name}}</td>
                <td>{{$trainer->mobileno}}</td>
                <td>{{$trainer->email}}</td>
                
                <td>
                    @if($trainer->status)
                        <label class="label label-success">Active</label>
                    @else
                        <label class="label label-danger">Inactive</label>
                    @endif
                    
                </td>
                <td>
                    <form method="post" action="{{url('admin/trainers/'.$trainer->id)}}">
                        <a href="{{url('admin/trainers/'.$trainer->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit Trainer">
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