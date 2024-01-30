@extends('layouts.head_foot')
@section('salon')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Photo Gallery</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Photo Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="gallery-sec">
        <div class="container">
            <div class="filter-menu style2 indicator-active filter-menu-active"><button data-filter="*"
                    class="tab-btn active" type="button">ALL</button> <button data-filter=".cat1" class="tab-btn"
                    type="button">Massage</button> <button data-filter=".cat2" class="tab-btn"
                    type="button">Waxing</button> <button data-filter=".cat3" class="tab-btn"
                    type="button">Relaxing</button> <button data-filter=".cat4" class="tab-btn" type="button">Skin
                    Care</button> <button data-filter=".cat5" class="tab-btn" type="button">Beauty Spa</button> <button
                    data-filter=".cat6" class="tab-btn" type="button">Hair Cut</button> <button data-filter=".cat7"
                    class="tab-btn" type="button">Hair Color</button> <button data-filter=".cat8" class="tab-btn"
                    type="button">Nail Manicure</button> <button data-filter=".cat9" class="tab-btn" type="button">Nail
                    Art</button> <button data-filter=".cat10" class="tab-btn" type="button">Nail Cut</button></div>
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_1.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Body Massage</h2>
                            <p class="gallery-text">Massage</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat5 cat9 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_2.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Relaxing</h2>
                            <p class="gallery-text">Relaxing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_3.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Skin Care</h2>
                            <p class="gallery-text">Skin Care</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_4.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Beauty Spa</h2>
                            <p class="gallery-text">Beauty Spa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_5.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Hair Cut</h2>
                            <p class="gallery-text">Hair Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_6.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Nail Art</h2>
                            <p class="gallery-text">Nail Art</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_7.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Hair Color</h2>
                            <p class="gallery-text">Hair Color</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img"><img src="assets/img/gallery/gallery_1_8.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content"><a href="assets/img/gallery/gallery_1_8.jpg"
                                class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Waxing</h2>
                            <p class="gallery-text">Waxing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-pagination text-center mt-60 mb-0">
                <ul>
                    <li><a href="blog"><i class="fa-solid fa-arrow-left"></i></a></li>
                    <li><a href="blog">1</a></li>
                    <li><a href="blog">2</a></li>
                    <li><a href="blog"><i class="fa-solid fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection