@extends('layouts.master')
@section('title','Courses')

@section('content')
    <div class="page-header">
        <h1>Courses</h1>
        
    </div>
    <div class="pull-right">
        <p>
            <a href="{{url('admin/course/create')}}" class="btn btn-primary btn-xs" title="Add Courses">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Fees</th>
            <th>Duration</th>
            <th>Duration Type Id</th>
            <th>Status</th>            
            <th>Action</th>
        </tr>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->first_name}} {{$course->last_name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->fees}}</td>
                <td>{{$course->duration}}</td>
                <td>{{$course->duration_type}}</td>
                <td>
                    @if($course->status)
                        <label class="label label-success">Active</label>
                    @else
                        <label class="label label-danger">Inactive</label>
                    @endif
                    
                </td>
                <td>
                    <form method="post" action="{{url('admin/course/'.$course->id)}}">
                        <a href="{{url('admin/course/'.$course->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit Courses">
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