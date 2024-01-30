@extends('layouts.admindashboard')
@section('admindashbaord')
<table class="table text-center table-bordered text-light">
<tr>
<th>NAME</th>
<th>DETAIL</th>
<th>IMAGE</th>
<th>ACTION</th>
</tr>

@foreach($viewgallery as $s)
<tr>
<td>{{$s->Name}}</td>
<td>{{$s->Detail}}</td>
<td> <img src="{{$s->Profile}}" class="mt-3 mb-3 squared-circle " width="50%" height="200px" alt=""></td>


<td>
   <a  href="/gallerydelete/{galid}"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
</td>
    </tr>

@endforeach

</table>


@endsection