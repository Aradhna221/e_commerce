@extends('layouts.admindashboard')
@section('admindashbaord')
<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Detail</th>
    <th>Image</th>
    <th>Action</th>
</tr>

@foreach($viewservice as $v)
<tr>

    <td>{{$v->service_name}}  </td>
    <td> {{$v->service_detail}}</td>
    <td> <img src="{{$v->service_image}}" class="squared-circle " width="100%" height="150px" alt=""></td>


   

<td>
<a href="/servicedelete/{{$v->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>

</td>
    </tr>

@endforeach

</table>

<a href="/exceldata3" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a>








      
        @endsection