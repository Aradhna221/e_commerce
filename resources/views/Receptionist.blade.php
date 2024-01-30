@extends('layouts.admindashboard')
@section('admindashbaord')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertrec'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "RECEPTIONIST RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container">
    <form action="{{URL::TO('insertreceptionist')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="name" class="form-control mt-3 w-50">
        <option value="Select Receptionist" disabled selected> Select Receptionist</option>
        <option value="Laurence">Laurence.</option>
        <option value="Norman">Norman.</option>
        <option value="Elizabeth ">Elizabeth .</option>
        <option value="Dorothy ">Dorothy.</option>
        <option value="Gertrude">Gertrude.</option>
        <option value="Amelia">Amelia</option>
        <option value="Charlotte ">Charlotte </option>
        <option value="Nicholas ">Nicholas</option>

    </select>       
     <input type="email" placeholder="Email" class="form-control mt-3 w-50" name="email">
        <input type="time" placeholder="Time" class="form-control mt-3 w-50" name="time">
        <input type="text" placeholder="Shift" class="form-control mt-3 w-50" name="shift">
        <input type="password" placeholder="Password" class="form-control mt-3 w-50" name="pass">
        <input type="file" placeholder="profile" class="form-control mt-3 w-50" name="profile">
        <button class="btn btn-info mt-3">Create profile</button>
    </form>
</div>


@endsection