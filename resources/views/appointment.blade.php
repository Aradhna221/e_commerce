@extends('layouts.head_foot')
@section('salon')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Appoinment</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Appoinment</li>
                        <center>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('appointmessage'))
                        <script>
                            Swal.fire({
                         icon: "success",
                         title: "APPOINTMENT RECORD SUCCESSFULLY ADDED ",
                         timer: 2000
});
                        </script>
                        @endif
                        </center>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative space">
        <div class="container">
            <form action="{{URL::TO('appointed')}}" method="POST"
                class="booking-form-area ajax-booking">
                @csrf
                <div class="booking-title-area">
                    <div class="title-area mb-40 text-center wow fadeInUp"><span class="sub-title style2">Make An
                            Appointment</span> <img src="assets/img/theme-img/title_shape_1.svg" alt="">
                        <h2 class="sec-title">Relax Anytime Any Day At 20% Discount</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6"><i class="fa-light fa-user"></i> <input type="text"
                            placeholder="First Name" name="fname" class="form-control">
                            <span class="text-danger">@error ('fname'){{$message}}   @enderror</span>
                        </div>
                    <div class="form-group col-md-6"><i class="fa-light fa-user"></i> <input type="text"
                            placeholder="Last Name" name="lname" class="form-control">
                            <span class="text-danger">@error ('lname'){{$message}}   @enderror</span>
                        </div>
                    <div class="form-group col-md-6"><i class="fa-light fa-envelope"></i> <input type="text"
                            placeholder="Email" name="email" class="form-control">
                            <span class="text-danger">@error ('email'){{$message}}   @enderror</span>
                        </div>
                    <div class="col-md-6 form-group"><i class="fa-light fa-phone"></i> <input type="text"
                            placeholder="phone" name="phone" class="form-control">
                            <span class="text-danger">@error ('phone'){{$message}}   @enderror</span>
                        </div>
                    <div class="form-group col-12"><i class="fa-regular fa-tag"></i> <select name="category">
                    <span class="text-danger">@error ('category'){{$message}}   @enderror</span>
                    <option value="Select Category" disabled selected>Select Category and Cost</option>
                    @foreach($appointrecord as $a)
                    <option value="{{$a->category}}">{{$a->category}}</option>
                    @endforeach
                           
                        </select>
                    </div>
                    <div class="form-group col-12"><select name="date" id="">
                    <span class="text-danger">@error ('date'){{$message}}   @enderror</span>
                        <option value="Select Date" disabled selected>Select date</option>
                     
                        @foreach($appointrecord as $a)
                        <option value="{{$a->date}}">{{$a->date}}</option>
                        @endforeach
                    </select>
                 </div>
                    <div class="form-group col-12"><select name="time" id="">
                    <span class="text-danger">@error ('time'){{$message}}   @enderror</span>
                        <option value="Select Time" disabled selected>Select time</option>
                      
                        @foreach($appointrecord as $a)
                        <option value="{{$a->time}}">{{$a->time}}</option>
                      @endforeach
                    </select>
                </div>

              <div class="btn-group justify-content-center justify-content-lg-start"><button
                            class="th-btn fw-btn">Make An Appointment <i
                                class="fa-solid fa-arrow-right ms-2"></i></button></div>
                               
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form> <a href="checkout">     <div class="btn-group justify-content-center justify-content-lg-start"><button
                            class="th-btn fw-btn">Checkout<i class="fa-solid fa-arrow-right ms-2"></i></button></div></a>

        </div>
    </div>
    <div class="overflow-hidden bg-smoke space">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-25"><span class="sub-title style2">Testimonials</span> <img
                        src="assets/img/theme-img/title_shape_1.svg" alt="">
                    <h2 class="sec-title">Our Customer Feedback</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="2" data-sm-slide-show="1"
                data-xs-slide-show="1">
                @foreach($about as $f)
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid style3 wow fadeInUp">
                        <div class="testi-grid_img"><img src="assets/img/blog/mm.jpg" alt=""></div>
                        <h3 class="box-title">{{$f->message}}</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">{{$f->name}}</h5>
                                <p class="testi-grid_desig">Feedbacks From Customers</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="assets/img/shape/quote_2.png" alt=""></div>
                        <div class="testi-shape1"><img src="assets/img/shape/leaf_2.svg" alt=""></div>
                        <div class="testi-shape2"><img src="assets/img/shape/flower_1_6.svg" alt=""></div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="shape-mockup jump d-none d-lg-block" data-bottom="15%" data-left="0%"><img
                src="assets/img/shape/leaves_1.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="0%"><img
                src="assets/img/shape/leaves_7.png" alt="shape"></div>
    </div>

    @endsection