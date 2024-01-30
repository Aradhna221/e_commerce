@extends('layouts.admindashboard')
@section('admindashbaord')

<div class="container ">
<form action="{{ URL::TO('insertblog') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <input type="text" name="author" placeholder="Author Name" class="form-control w-50 mt-3">
    <select name="category" class="form-control mt-3 w-50">
        <option value="Choose Category" disabled selected> Choose Category</option>
        <option value="Spa & Massage">Spa & Massage</option>
        <option value="Head Massage">Head Massage</option>
        <option value="Body Massage">Facial & Massage</option>
        <option value="Stone Massage">Stone Massage</option>
        <option value="Sports Massage">Sports Massage</option>
        <option value="Threating">Threating</option>
    </select>
    <input type="date" name="date" placeholder="Date" class="form-control w-50 mt-3">
    <input type="text" name="title" placeholder="Blog Title" class="form-control w-50 mt-3">
    <input type="text" name="link" placeholder="Add blog url" class="form-control w-50 mt-3">
    <input type="file" name="image" class="form-control w-50 mt-3"><br>
    <button type="submit" class="btn btn-info mt-3">Add Blog</button>
    </form>
</div>

@endsection