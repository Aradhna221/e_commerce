@extends('layouts.admindashboard')
@section('admindashbaord')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertgallery'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "GALLERY IMAGE ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container ">
<form action="{{ URL::TO('insertgallery') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <input type="text" name="name" placeholder="Name" class="form-control w-50 mt-3 text-light">
    <textarea name="detail" class="form-control w-50 mt-3" rows="3" placeholder="Details"></textarea>  
    <input type="file" name="profile" class="form-control w-50 mt-3"> 

    <button type="submit" class="btn btn-info mt-3">Add Product</button>
    </form>
</div>


@endsection