@extends('layouts.admindashboard')
@section('admindashbaord')


<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('receptionsalary'))
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



<form action="{{URL::TO('/receptionsalary')}}" method="POST">
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
<input type="text" placeholder="Enter Salary" class="form-control mt-3 w-50" name="salary">
<input placeholder="Enter Date" type="date" class="form-control  mt-3 w-50" name="date">
<input type="number" placeholder="Enter Account Number" class="form-control mt-3 w-50" name="account">
<button class="btn btn-success mt-3">Transfer Salary</button>
</form>
@endsection
