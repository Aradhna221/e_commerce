@extends('layouts.user_dashboard')
@section('userdashboard')
<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Rating</th>
    <th>Message</th>
 
</tr>

@foreach($userfeedbackrecord as $f)
<tr>

    <td>{{$f->name}}</td>
    <td>{{$f->email}}</td>
    <td>{{$f->rating}}</td>
    <td>{{$f->message}}</td>
    

   


    </tr>

@endforeach

</table>



@endsection