@extends('layouts.admindashboard')
@section('admindashbaord')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertproduct'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "PRODUCT ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container ">
<form action="{{ URL::TO('insertproduct') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <input type="text" name="name" placeholder="Product Name" class="form-control w-50 mt-3">
    <input type="text" name="quantity" placeholder="Quantity" class="form-control w-50 mt-3">
    <input type="text" name="price" placeholder="Price" class="form-control w-50 mt-3">
    <input type="text" name="type" placeholder="Type" class="form-control w-50 mt-3">
    <textarea name="details" class="form-control w-50 mt-3" rows="3" placeholder="Product Details"></textarea>  
    <input type="file" name="image" class="form-control w-50 mt-3"> 

    <button type="submit" class="btn btn-info mt-3">Add Product</button>
    </form>
</div>


@endsection