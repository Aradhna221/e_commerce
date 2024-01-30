@extends('layouts.admindashboard')
@section('admindashbaord')


<table class="table text-center table-bordered mt-3">
<tr>
<th>State</th>
<th>First_name</th>
<th>Last_name</th>
<th>City</th>
<th>Country</th>
<th>Category</th>
<th>PostCode</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>

</tr>

@foreach($abc as $u)
<tr>
<td>{{$u->state}}</td>
<td>{{$u->first_name}}</td>
<td>{{$u->last_name}}</td>
<td>{{$u->city}}</td>
<td>{{$u->country}}</td>
<td>{{$u->category}}</td>
<td>{{$u->zipcode}}</td>
<td>{{$u->email}}</td>
<td>{{$u->phone}}</td>

<td>
    <a href="/checkoutdelete/{{$u->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
</td>
    </tr>
    @endforeach

</table>
<a href="/exceldata4" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a>
@endsection
