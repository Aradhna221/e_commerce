@extends('layouts.admindashboard')
@section('admindashbaord')


<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('stylistsalary'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "SALARY TEANSMITTED SECCESSFULLY ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>



<form action="{{URL::TO('/stylistsalary')}}" method="POST">
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
<input type="text" placeholder="Enter Salary" class="form-control mt-3 w-50" name="salary">
<input placeholder="Enter Date" type="date" class="form-control  mt-3 w-50" name="date">
<input type="number" placeholder="Enter Account Number" class="form-control mt-3 w-50" name="account">
<button class="btn btn-success mt-3">Transfer Salary</button>
</form>
@endsection
