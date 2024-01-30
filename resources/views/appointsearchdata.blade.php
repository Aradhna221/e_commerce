@extends('layouts.user_dashboard')
@section('userdashboard')

<div class="container">




<table class="table text-center table-bordered mt-5 text-dark">

<tr>
<th>First_name</th>
<th>Last_name</th>
<th>Email</th>
<th>Phone</th>
<th>Category</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>


</tr>

@foreach($mydata as $u)
<tr>

    
<td>{{$u->First_name}}</td>
<td>{{$u->Last_name}}</td>
<td>{{$u->Email}}</td>
<td>{{$u->Phone}}</td>
<td>{{$u->Category}}</td>
<td>{{$u->Date}}</td>
<td>{{$u->Time}}</td>
<td>{{$u->Status}}</td>
    </tr>

@endforeach

</table>

</div>


@endsection