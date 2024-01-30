@extends('layouts.head_foot')
@section('salon')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Shop</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="th-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <!-- <div class="col-md">
                                <p class="woocommerce-result-count">Showing 1–9 of 16 results</p>
                            </div> -->
                            <!-- <div class="col-md-auto">
                                <form class="woocommerce-ordering" method="get"><select name="orderby" class="orderby"
                                        aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select></form>
                            </div> -->
                        </div>
                    </div>
                    <div class="row gy-40">
                    @foreach($pro as $v)
                        <div class="col-xl-4 col-md-6">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="{{$v->Image}}"
                                        alt="Product Image">
                                  
                                </div>
                                <div class="product-grid_wrapper">
                                    <div class="product-content">
                                        <h3 class="box-title"><a class="text-inherit" href="">{{$v->Name}}</a></h3>
                                        
                                              
                                        <div class="product-category"><a href="shop"><h5>Details:</h5> {{$v->Details}}</a></div>
                                    </div>
                                    <div class="product-grid_content"><span class="price">{{$v->Price}}</span>
                                    <h6>{{$v->Type}}</h6>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated
                                                <strong class="rating">5.00</strong> out of 5 based on <span
                                                    class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                         </div> 
                         @endforeach
                       
                    </div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function()
    {
        $("#tbn").click(function()
        {
            
        }
        )
    }
    )
</script>





                    <!-- <div class="th-pagination text-center pt-50">
                        <ul>
                            <li><a href="blog"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li><a href="blog">1</a></li>
                            <li><a href="blog">2</a></li>
                            <li><a href="blog"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    @endsection