@extends('layouts.admindashboard')
@section('admindashbaord')

<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Message</th>
    <th>Action</th>
</tr>

@foreach($contactrecord as $a)
<tr>

    <td>{{$a->Name}}</td>
    <td>{{$a->Email}}</td>
    <td>{{$a->Number}}</td>
    <td>{{$a->Gender}}</td>
    <td>{{$a->Message}}</td>

<td>
    <a href="/contactdelete/{{$a->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
</td>
    </tr>

@endforeach

</table>
<a href="/exceldata" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a>

@endsection