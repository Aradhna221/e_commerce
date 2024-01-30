@extends('layouts.admindashboard')
@section('admindashbaord')

<!-- <link rel="stylesheet" href="../dash/assets/css/style.css"> -->
<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Rating</th>
    <th>Message</th>
    <th>Action</th>
</tr>

@foreach($reviewrecord as $f)
<tr>

    <td>{{$f->name}}</td>
    <td>{{$f->email}}</td>
    <td>{{$f->rating}}</td>
    <td>{{$f->message}}</td>
    

   

<td>
    <a href="/feedbackdelete/{{$f->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
</td>
    </tr>

@endforeach

</table>
<a href="/exceldata2" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a>


@endsection