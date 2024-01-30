@extends('layouts.receptionist_dashboard')
@section('receptionistdashbaord')
<table class="table text-center table-bordered">
<tr>
<th>Product Id</th>
<th>Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Type</th>
<th>Details</th>
<th>Image</th>
 <th>Action</th>
</tr>

@foreach($viewproduct as $v)
<tr>
<td>{{$v->Productid}}</td>
<td>{{$v->Name}}</td>
<td>{{$v->Quantity}}</td>
<td>{{$v->Price}}</td>
<td>{{$v->Type}}</td>
<td>{{$v->Details}}</td>
<td>
<img src="{{$v->Image}}" class="mt-3 mb-3 rounded-circle " width="90%" height="150px" alt=""></td>
<td>
    <a href="/recproductdelete/{{$v->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
   
</td>
    </tr>

@endforeach


@endsection