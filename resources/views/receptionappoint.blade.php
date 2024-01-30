@extends('layouts.receptionist_dashboard')
@section('receptionistdashbaord')
<table class="table text-center table-bordered mt-5">
<tr>
<th>First_name</th>
<th>Last_name</th>
<th>Email</th>
<th>Phone</th>
<th>Category</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
 <!-- <th>Action</th> -->
</tr>

@foreach($appointrecord as $u)
<tr>
<td>{{$u->First_name}}</td>
<td>{{$u->Last_name}}</td>
<td>{{$u->Email}}</td>
<td>{{$u->Phone}}</td>
<td>{{$u->Category}}</td>
<td>{{$u->Date}}</td>
<td>{{$u->Time}}</td>
<td>{{$u->Status}}</td>

<!-- <td>
    <a href="/appointmentdelete/{{$u->id}}" class="btn btn-danger">Delete</a>
    <a href="/appointupdate/{{$u->id}}" class="btn btn-info">Update</a>

   
</td> -->
    </tr>

@endforeach

</table>


@endsection