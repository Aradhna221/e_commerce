@extends('layouts.admindashboard')
@section('admindashbaord')

<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertservice'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "SERVICE RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container ">
    <form action="{{ URL::TO('insertservice') }}" method="POST" enctype="multipart/form-data">


    @csrf

    <input type="text" name="proname" placeholder="Service Name" class="form-control w-50 mt-3">

    <textarea name="prodetails" class="form-control w-50 mt-3" rows="6" placeholder="Service Details"></textarea>
  
 <input type="file" name="image" class="form-control w-50 mt-3"> 

    <button type="submit" class="btn btn-info mt-3">Add Service</button>
    </form>
</div>


@endsection