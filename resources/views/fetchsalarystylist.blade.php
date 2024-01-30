@extends('layouts.stylistheader')
@section('stylishdashbaord')
<table class="table text-center table-bordered mt-5">
<tr>
<th>Name</th>
<th>Salary</th>
<th>Date</th>
<th>Account Number</th>
</tr>

@foreach($fetch as $v)
<tr>
<td>{{$v->Name}}</td>
<td>{{$v->Salary}}</td>
<td>{{$v->Date}}</td>
<td>{{$v->Account_No}}</td>

    </tr>

@endforeach

</table>
<!-- <a href="/exceldata5" class="btn btn-success mt-5">Export Into Excel</a> -->


@endsection