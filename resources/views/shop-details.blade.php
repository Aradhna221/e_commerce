@extends('layouts.head_foot')
@section('salon')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Feedback</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Customer Feedback</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/product_details_1_1.jpg" alt="Product Image">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6">
                    <div class="product-about">
                        <p class="price">$99.00</p>
                        <h2 class="product-title">OPI Nail Polish</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on
                                    <span class="rating">1</span> customer rating</span></div><a
                                href="shop-details" class="woocommerce-review-link">(<span class="count">2</span>
                                customer reviews)</a>
                        </div>
                        <p class="text">Syndicate customized growth strategies prospective human capital leverage
                            other's optimal e-markets without transparent catalysts for change. Credibly coordinate
                            highly efficient methods of empowerment cross unit solutions. It provides a rejuvenating
                            experience that promotes relaxation</p>
                        <div class="actions">
                            <div class="quantity"><input type="number" class="qty-input" step="1" min="1" max="100"
                                    name="quantity" value="2" title="Qty"> <button class="quantity-plus qty-btn"><i
                                        class="far fa-chevron-up"></i></button> <button
                                    class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button></div>
                            <button class="th-btn">Add to Cart</button>
                        </div>
                        <div class="product_meta"><span class="sku_wrapper">SKU: <span class="sku">123ABC</span></span>
                            <span class="posted_in">Category: <a href="shop" rel="tag">Nail Polish</a></span>
                            <span>Tags: <a href="shop">Nail Care</a><a href="shop">Nail Art</a></span></div>
                    </div>
                </div> -->
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link" id="description-tab" data-bs-toggle="tab"
                        href="#description" role="tab" aria-controls="description" aria-selected="false">Product
                        Description</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" id="reviews-tab"
                        data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                        aria-selected="true">Customer Reviews</a></li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p>Credibly negotiate emerging materials whereas clicks-and-mortar intellectual capital.
                        Compellingly whiteboard client-centric sources before cross-platform schemas. Distinctively
                        develop future-proof outsourcing without multimedia based portals. Progressively coordinate
                        next-generation architectures for collaborative solutions. Professionally restore
                        backward-compatible quality vectors before customer directed metrics. Holisticly restore
                        technically sound internal or "organic" sources before client-centered human capital underwhelm
                        holistic mindshare for prospective innovation.</p>
                    <p>Seamlessly target fully tested infrastructures whereas just in time process improvements.
                        Dynamically exploit team driven functionalities vis a vis global total linkage redibly
                        synthesize just in time technology rather than open-source strategic theme areas.</p>
                </div>
                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <div class="th-comments-wrap">
                            <ul class="comment-list">
                            @foreach($shop as $f)
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater"><img src="assets/img/blog/hm.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content" style="width:100%;">
                                            <h4 class="name">{{$f->name}}</h4><span class="commented-on"><i class="fal fa-email"></i>{{$f->email}}</span>
                                            <div ><span
                                                    style="width:100%">Rated <strong class="rating">{{$f->rating}}</strong> out of
                                                    5 based on <span class="rating"></span> customer rating</span>
                                            </div>
                                            <p class="text">{{$f->message}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                <!-- <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater"><img src="assets/img/blog/comment-author-2.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Alexa Deo</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>26 April, 2022</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Completely build enabled web-readiness and distributed
                                                customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater"><img src="assets/img/blog/comment-author-1.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Tara sing</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>26 April, 2022</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Completely build enabled web-readiness and distributed
                                                customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater"><img src="assets/img/blog/comment-author-3.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Tara sing</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>26 April, 2022</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Completely build enabled web-readiness and distributed
                                                customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="th-comment-form">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Add a review</h3>
                                <center>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('FEEDBACKMESSAGE'))
                        <script>
                            Swal.fire({
                         icon: "success",
                         title: "FEEDBACK ADDED SUCCESSFULLY",
                         timer: 2000
});
                        </script>
                        @endif
                        </center>
                            </div>
                            <div class="row">
                                <form action="{{URL::TO('/reviewinsert')}}" method="POST">
                                    @csrf
                               
                                    <div class="col-12 form-group">
                                    <span class="text-danger">@error ('star'){{$message}}   @enderror</span>
                                    <select name="star" class="form-control" id="">
                                        <option value="Rate Us<" disabled selected>Rate Us</option>
                                        <option value="1star">1 star</option>
                                        <option value="2star">2 star</option>
                                        <option value="3star">3 star</option>
                                        <option value="4star">4 star</option>
                                        <option value="5star">5 star</option>

                                    </select>
</div>
                                <div class="col-12 form-group"><textarea name="message" placeholder="Write a Message"
                                        class="form-control"></textarea> <i class="text-title far fa-pencil-alt"></i>
                                        <span class="text-danger">@error ('message'){{$message}}   @enderror</span>
                                </div>
                                <div class="col-md-12 form-group"><input name="name" type="text" placeholder="Your Name"
                                        class="form-control"> <i class="text-title far fa-user"></i>
                                        <span class="text-danger">@error ('name'){{$message}}   @enderror</span>
                                    </div>
                                <div class="col-md-12 form-group"><input type="text" name="email" placeholder="Your Email"
                                        class="form-control"> <i class="text-title far fa-envelope"></i>
                                        <span class="text-danger">@error ('email'){{$message}}   @enderror</span>

                                    </div>
                                <div class="col-12 form-group"><input id="reviewcheck" name="reviewcheck"
                                        type="checkbox"> <label for="reviewcheck">Save my name, email, and website in
                                        this browser for the next time I comment.<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0"><button class="th-btn">Post Review</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="space-extra-top mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <h2 class="sec-title text-center">Related Products</h2>
                    </div>
                </div>
                <div class="row th-carousel" id="productCarousel" data-slide-show="3" data-lg-slide-show="3"
                    data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1">
                    <div class="col-lg-3 col-md-6">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                                <div class="product-action"><a href="cart"><span class="action-text">Add To
                                            cart</span><span class="icon"><i
                                                class="fa-regular fa-cart-shopping"></i></span></a> <a
                                        href="wishlist"><span class="action-text">wishlist</span><span
                                            class="icon"><i class="fal fa-heart"></i></span></a> <a
                                        class="popup-content" href="#QuickView"><span
                                            class="action-text">Compare</span><span class="icon"><i
                                                class="fa-regular fa-eye"></i></span></a></div>
                            </div>
                            <div class="product-grid_wrapper">
                                <div class="product-content">
                                    <h3 class="box-title"><a class="text-inherit" href="shop-details">OPI Nail
                                            Polish</a></h3>
                                    <div class="product-category"><a href="shop">Popular</a></div>
                                </div>
                                <div class="product-grid_content"><span class="price">$99</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                                <div class="product-action"><a href="cart"><span class="action-text">Add To
                                            cart</span><span class="icon"><i
                                                class="fa-regular fa-cart-shopping"></i></span></a> <a
                                        href="wishlist"><span class="action-text">wishlist</span><span
                                            class="icon"><i class="fal fa-heart"></i></span></a> <a
                                        class="popup-content" href="#QuickView"><span
                                            class="action-text">Compare</span><span class="icon"><i
                                                class="fa-regular fa-eye"></i></span></a></div>
                            </div>
                            <div class="product-grid_wrapper">
                                <div class="product-content">
                                    <h3 class="box-title"><a class="text-inherit" href="shop-details">Sunscreen
                                            Lotion</a></h3>
                                    <div class="product-category"><a href="shop">Brand</a></div>
                                </div>
                                <div class="product-grid_content"><span class="price">$98</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                                <div class="product-action"><a href="cart"><span class="action-text">Add To
                                            cart</span><span class="icon"><i
                                                class="fa-regular fa-cart-shopping"></i></span></a> <a
                                        href="wishlist"><span class="action-text">wishlist</span><span
                                            class="icon"><i class="fal fa-heart"></i></span></a> <a
                                        class="popup-content" href="#QuickView"><span
                                            class="action-text">Compare</span><span class="icon"><i
                                                class="fa-regular fa-eye"></i></span></a></div>
                            </div>
                            <div class="product-grid_wrapper">
                                <div class="product-content">
                                    <h3 class="box-title"><a class="text-inherit" href="shop-details">Wholesale
                                            Liquid</a></h3>
                                    <div class="product-category"><a href="shop">Classic</a></div>
                                </div>
                                <div class="product-grid_content"><span class="price">$96</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="assets/img/product/product_1_4.jpg" alt="Product Image">
                                <div class="product-action"><a href="cart"><span class="action-text">Add To
                                            cart</span><span class="icon"><i
                                                class="fa-regular fa-cart-shopping"></i></span></a> <a
                                        href="wishlist"><span class="action-text">wishlist</span><span
                                            class="icon"><i class="fal fa-heart"></i></span></a> <a
                                        class="popup-content" href="#QuickView"><span
                                            class="action-text">Compare</span><span class="icon"><i
                                                class="fa-regular fa-eye"></i></span></a></div>
                            </div>
                            <div class="product-grid_wrapper">
                                <div class="product-content">
                                    <h3 class="box-title"><a class="text-inherit" href="shop-details">Hair
                                            Dryers</a></h3>
                                    <div class="product-category"><a href="shop">Cosmetic</a></div>
                                </div>
                                <div class="product-grid_content"><span class="price">$85<del>$98</del></span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

@endsection