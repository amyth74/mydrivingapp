@extends('layouts.master')
@section('title','Bookings')

@section('content')
    <div class="page-header">
        <h1>Bookings</h1>
        
    </div>
    <div class="pull-right">
        <p>
            <a href="{{url('admin/booking/create')}}" class="btn btn-primary btn-xs" title="Add Booking">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Enquiry Id</th>
            <th>Fees</th>
            <th>Advance</th>
            <th>Timing</th>
            <th>Status</th>            
            <th>Action</th>
        </tr>
        @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->enquiry->first_name}} {{$booking->enquiry->last_name}}</td>
                <td>{{$booking->fees}}</td>
                <td>{{$booking->advance}}</td>
                <td>{{$booking->timing}}</td>
                <td>
                    @if($booking->status)
                        <label class="label label-success">Active</label>
                    @else
                        <label class="label label-danger">Inactive</label>
                    @endif
                    
                </td>
                <td>
                    <form method="post" action="{{url('admin/booking/'.$booking->id)}}">
                        <a href="{{url('admin/booking/'.$booking->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit Booking Type">
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