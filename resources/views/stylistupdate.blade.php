@extends('layouts.admindashboard')
@section('admindashbaord')

<link rel="stylesheet" href="../dash/css/vertical-layout-light/style.css">


<form action="{{URL::TO('stylistdataupdated/'. $mydata->id)}}" method="POST">
@csrf
<label for="">Time*</label>
<input type="time" name="time" value="{{$mydata->Time}}" class="form-control mt-3 w-50 ">
<br>
<label for="">Shift*</label>
<input type="text" name="shift" value="{{$mydata->Shift}}" class="form-control mt-3 w-50 ">
<br>

<button class="btn btn-info mt-3">Update Record</button>
</form>




@endsection