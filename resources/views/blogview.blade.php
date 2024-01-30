@extends('layouts.admindashboard')
@section('admindashbaord')
<table class="table text-center table-bordered">
<tr>
<th>Author_Name</th>
<th>Category</th>
<th>Date</th>
<th>Blog_title</th>
<th>Blog_URL</th>
<th>Image</th>
 <th>Action</th>
</tr>

@foreach($viewblog as $v)
<tr>
<td>{{$v->Author}}</td>
<td>{{$v->Category}}</td>
<td>{{$v->Date}}</td>
<td>{{$v->Blog_title}}</td>
<td>{{$v->Blog_link}}</td>

<td>
<img src="{{$v->Image}}" class="mt-3 mb-3 rounded-circle " width="90%" height="150px" alt=""></td>
<td>
    <a href="/blogdelete/{{$v->id}}" class="btn btn-danger">Delete</a>
   
</td>
    </tr>

@endforeach

</table>



@endsection