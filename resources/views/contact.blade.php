@extends('layouts.head_foot')
@section('salon')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Contact Us </h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us </li>
                        <center>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('contactmessage'))
                        <script>
                            Swal.fire({
                         icon: "success",
                         title: "CONTACT ADDED SUCCESSFULLY",
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
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-6 col-xl-5">
                    <div class="contact-info-wrap me-xl-4">
                        <div class="title-area mb-20">
                            <h3 class="sec-title">Our Contact Information</h3>
                            <p>Have a inquiry or some feedback for us? Fill out the form below to contact our team.</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-location-dot"></i></div>
                            <div class="media-body">
                                <h3 class="box-title">Our Address</h3><span class="contact-info_text">2690 Hiltona
                                    Street Victoria Road New York, Canada</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-phone"></i></div>
                            <div class="media-body">
                                <h3 class="box-title">Phone Number</h3><span class="contact-info_text">Mobile: <a
                                        href="tel:+256214203215">+256 214 203 215 </a></span><span
                                    class="contact-info_text">Email: <a
                                        href="mailto:info@rasm.com">info@rasm.com</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-clock"></i></div>
                            <div class="media-body">
                                <h3 class="box-title">Hours of Operation</h3><span class="contact-info_text">Monday -
                                    Friday: 9AM - 8PM Sunday - Saturday: 10AM - 6PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="map-sec"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrapper">
                        <form  action="{{URL::TO('inserted')}}" method="POST">
                            @csrf
                            <h2 class="form-title text-center">Get In Touch</h2>
                            <div class="row">
                                <div class="form-group col-md-6"><i class="fa-sharp fa-light fa-user"></i> <input
                                        type="text" class="form-control" name="uname" id="name" placeholder="Your Name">
                                        <span class="text-danger">@error ('uname'){{$message}}   @enderror</span>
                                </div>
                                <div class="form-group col-md-6"><i class="fa-sharp fa-regular fa-envelope"></i> <input
                                        type="email" class="form-control" name="uemail" id="email"
                                        placeholder="Email Address">
                                        <span class="text-danger">@error ('uemail'){{$message}}   @enderror</span>
                                    </div>
                                <div class="form-group col-md-6"><input type="tel" class="form-control" name="unumber"
                                        id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i>
                                        <span class="text-danger">@error ('unumber'){{$message}}   @enderror</span>
                                    </div>
                                <div class="form-group col-md-6"><i class="fa-regular fa-tag"></i> <select
                                        name="usubject" id="subject" class="form-select nice-select">
                                        <span class="text-danger">@error ('usubject'){{$message}}   @enderror</span>
                                        <option value="Gender" disabled="disabled" selected="selected" hidden>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        
                                    </select></div>
                                <div class="form-group col-12"><i class="fal fa-comment"></i> <textarea name="umessage"
                                        id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Message"></textarea>
                                        <span class="text-danger">@error ('umessage'){{$message}}   @enderror</span>
                                    </div>
                                <div class="col-12"><button type="submit" class="th-btn fw-btn">Send Messages</button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection