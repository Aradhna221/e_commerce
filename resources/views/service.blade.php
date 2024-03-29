@extends('layouts.head_foot')
@section('salon')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Services </h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row gy-5">
                @foreach($ser as $v)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_1.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title">{{$v->service_name}}</h3>
                            <p class="service-box_text">{{$v->service_detail}}</p>
                        </div>
                        <div class="service-img" style=""><img  src="{{$v->service_image}}" alt="Service"></div>
                        <a href="appointment">     <div class="btn-group justify-content-center justify-content-lg-start"><button
                            class="th-btn fw-btn">MAKE AN APPOINTMENT<i class="fa-solid fa-arrow-right ms-2"></i></button></div></a>
                </div>
                            
                    </div>
              
               
@endforeach






                <!-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_2.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Oil Therapy</a></h3>
                            <p class="service-box_text">At our beauty spa salon, we offer a wide range of services
                                tailored to meet.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_2.jpg" alt="Service"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_3.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Aroma Therapy</a></h3>
                            <p class="service-box_text">We also offer private rooms for more intimate treatments and
                                couples.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_3.jpg" alt="Service"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_4.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Waxing</a></h3>
                            <p class="service-box_text">Relax in our serene lounge area, sip on herbal teas, and immerse
                                yourself.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_4.jpg" alt="Service"></div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_5.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Nail Manicure</a></h3>
                            <p class="service-box_text">Relax in our serene lounge area, sip on herbal teas, and immerse
                                yourself.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_5.jpg" alt="Service"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_6.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Nail Art</a></h3>
                            <p class="service-box_text">Whether youre seeking a rejuvenating facial, a soothing massage
                                body treatment</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_6.jpg" alt="Service"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_7.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Nail Pedicure</a></h3>
                            <p class="service-box_text">At our beauty spa salon, we offer a wide range of services
                                tailored to meet.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_7.jpg" alt="Service"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                    <div>
                        <div class="service-box">
                            <div class="service-box_icon">
                                <div class="global-icon"><img src="assets/img/icon/service_1_8.svg" alt="Icon"></div>
                            </div>
                            <h3 class="box-title"><a href="service-details">Nail Paraffin Hands</a></h3>
                            <p class="service-box_text">We also offer private rooms for more intimate treatments and
                                couples.</p>
                        </div>
                        <div class="service-img"><img src="assets/img/service/service_2_8.jpg" alt="Service"></div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="15%" data-left="0%"><img
                src="assets/img/shape/leaves_1.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="0%"><img
                src="assets/img/shape/leaves_7.png" alt="shape"></div>
    </section>
    <!-- <div class="appointment-sec bg-top-center space" id="contact-sec" data-bg-src="assets/img/bg/appointment_bg_2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="title-area mb-25 text-center text-lg-start"><span class="sub-title text-white">Make An
                            Appointment<img src="assets/img/theme-img/title_right2.svg" alt=""></span>
                        <h2 class="sec-title text-white">Experience the Magic of Our Nail Styling Services</h2>
                    </div>
                    <div class="appointment-work text-center text-lg-start">
                        <h4 class="work-title">Working Hours:</h4>
                        <p>we are dedicated to delivering exceptional results and ensuring your nails make a bold and
                            beautiful statement.</p>
                        <ul class="working-list">
                            <li>Monday to Friday<span>09:00am - 20:00pm</span></li>
                            <li>Saturday<span>10:00am - 18:00pm</span></li>
                            <li>Sunday<span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-quote-form wow fadeInUp">
                        <div class="row">
                            <div class="col-md-6 form-group"><i class="fa-sharp fa-light fa-user"></i> <input
                                    type="text" placeholder="First Name" class="form-control"></div>
                            <div class="col-md-6 form-group"><i class="fa-sharp fa-light fa-user"></i> <input
                                    type="text" placeholder="Last Name" class="form-control"></div>
                            <div class="col-md-6 form-group"><i class="fa-light fa-envelope-open"></i> <input
                                    type="text" placeholder="Email Address" class="form-control"></div>
                            <div class="col-md-6 form-group"><i class="fa-light fa-phone"></i> <input type="text"
                                    placeholder="Phone Number" class="form-control"></div>
                            <div class="form-group col-12"><i class="fa-regular fa-tag"></i> <select name="subject"
                                    id="subject" class="form-select nice-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Select Subject
                                    </option>
                                    <option value="Engine Diagnostics">Spa & Massage</option>
                                    <option value="Facial & Massage">Facial & Massage</option>
                                    <option value="Engine Diagnostics">Head Massage</option>
                                    <option value="Sports Massage">Sports Massage</option>
                                    <option value="Stone Massage">Stone Massage</option>
                                </select></div>
                            <div class="form-group col-12"><input type="text" class="date-pick form-control" name="date"
                                    id="date-pick" placeholder="Select Date"> <i class="fa-light fa-calendar-days"></i>
                            </div>
                            <div class="form-group col-12"><input type="text" class="time-pick form-control" name="time"
                                    id="time-pick" placeholder="Select Time"> <i class="fa-light fa-clock"></i></div>
                            <div class="btn-group justify-content-center justify-content-xl-start"><button
                                    class="th-btn style3 fw-btn">Make An Appointment <i
                                        class="fa-solid fa-arrow-right ms-2"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


@endsection