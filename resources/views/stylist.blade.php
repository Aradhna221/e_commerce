@extends('layouts.admindashboard')
@section('admindashbaord')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertstyle'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "STYLIST ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container">
    <form action="{{URL::TO('insertstylist')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="name" class="form-control mt-3 w-50">
        <option value="Select Stylist" disabled selected> Select Stylist</option>
        <option value="Law Roach.">Law Roach.</option>
        <option value="Kate Young.">Kate Young.</option>
        <option value="Elizabeth Saltzman.">Elizabeth Saltzman.</option>
        <option value="Micaela Erlanger. ">Micaela Erlanger.</option>
        <option value="Leslie Fremar.">Leslie Fremar.</option>
        <option value="Petra Flannery.">Petra Flannery.</option>
        <option value="Leslie Fremar. ">Leslie Fremar. </option>
        <option value="Mackenzie Grandquist. ">Mackenzie Grandquist.</option>

    </select>
        <input type="email" placeholder="Email" class="form-control mt-3 w-50" name="email">
        <input type="password" placeholder="Password" class="form-control mt-5 w-50" name="pass">
        <input type="time" placeholder="Time" class="form-control mt-3 w-50" name="time">
        <input type="text" placeholder="Shift" class="form-control mt-3 w-50" name="shift">
        <input type="file" placeholder="profile" class="form-control mt-3 w-50" name="profile">
        <button class="btn btn-info mt-3">Create profile</button>
    </form>
</div>


@endsection