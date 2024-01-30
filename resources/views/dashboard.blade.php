@extends('layouts.admindashboard')
@section('admindashbaord')


<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('dateandtime'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "DATE,TIME & CATEGORY INSERTED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>



<form action="{{URL::TO('/dateinsert')}}" method="POST">
@csrf
<input placeholder="Enter Date" type="date" class="form-control  mt-3 w-50" name="date">
<input type="time" placeholder="Enter Time" class="form-control mt-3 w-50" name="time">
<select name="category" class="form-control mt-3 w-50">
        <option value="Choose Category" disabled selected> Choose Category&Time</option>
        <option value="Spa & Massage ------- $30">Spa & Massage ------- $30</option>
        <option value="Head Massage ------- $30">Head Massage ------- $30</option>
        <option value="Body Massage ------- $30">Facial & Massage ------- $30</option>
        <option value="Stone Massage ------- $30">Stone Massage ------- $30</option>
        <option value="Sports Massage ------- $30">Sports Massage ------- $30</option>
        <option value="Threating ------- $30">Threating ------- $30</option>
    </select>
<button class="btn btn-danger mt-3">Add Date,time&category </button>
</form>
@endsection
