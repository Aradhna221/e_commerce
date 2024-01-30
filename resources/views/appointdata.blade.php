@extends('layouts.admindashboard')
@section('admindashbaord')
<table class="table text-center table-bordered">
<tr>
    <th>Date</th>
    <th>Time</th>
    <th>Category</th>
    <th>Action</th>
</tr>

@foreach($appointrecord as $a)
<tr>

    <td>{{$a->date}}</td>
    <td>{{$a->time}}</td>
    <td>{{$a->category}}</td>

<td>
    <a href="/datedelete/{{$a->id}}"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>

   
</td>
    </tr>

@endforeach

</table>

<a href="/exceldata9" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a>


@endsection