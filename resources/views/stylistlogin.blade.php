@extends('layouts.head_foot')
@section('salon')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('style'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "STYLIST LOGGED IN SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<center>
<div class="container ">
    <div class="row">
    <form action="{{URL::TO('stylistinserted')}}" method="POST">
        @csrf
        <input type="email" placeholder="enter your email here" class="form-control mt-5 w-50" name="email">
        <span class="text-danger">@error ('email'){{$message}}   @enderror</span>
        <input type="password" placeholder="enter your password here" class="form-control mt-3 w-50" name="pass">
        <span class="text-danger">@error ('pass'){{$message}}   @enderror</span>
       <br>
        <button  class="btn btn-danger mt-3 ">Login</button><br><br>
    </form>
    </div>
</div>
</center>
@endsection