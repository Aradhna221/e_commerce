@extends('layouts.user_dashboard')
@section('userdashboard')


<form action="{{URL::TO('userfilterdata')}}" method="POST">
@csrf
<input type="search" class="form-control w-50 mt-3 text-dark" placeholder="Search Here" name="usersearch">


<button class="btn btn-success mt-3">Search here</button> 
</form>



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

@foreach($data as $u)
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