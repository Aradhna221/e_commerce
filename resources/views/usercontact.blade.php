@extends('layouts.user_dashboard')
@section('userdashboard')
<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Message</th>
    
</tr>

@foreach($userconrecord as $a)
<tr>

    <td>{{$a->Name}}</td>
    <td>{{$a->Email}}</td>
    <td>{{$a->Number}}</td>
    <td>{{$a->Gender}}</td>
    <td>{{$a->Message}}</td>


    </tr>

@endforeach

</table>



@endsection