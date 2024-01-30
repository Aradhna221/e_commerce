@extends('layouts.head_foot')
@section('salon')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Checkout</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
           
            <div class="row">
            <form action="{{URL::TO('insertcheck')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h4">Billing Details</h2>
                        <center>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('CHECKOUTMESSAGE'))
                        <script>
                            Swal.fire({
                         icon: "success",
                         title: "CHECKOUT ADDED SUCCESSFULLY",
                         timer: 2000
});
                        </script>
                        @endif
                        </center>
                        <div class="row">
                            <div class="col-12 form-group"><select class="form-select" name="state">
                                    <option value="UK">United Kingdom (UK)</option>
                                    <option value="US">United State (US)</option>
                                    <option value="AU">Australia (AU)</option>
                                    <option value="DE">Germany (DE)</option>
                                </select></div>
                            <div class="col-md-12 form-group"><input type="text" class="form-control"
                                    placeholder="First Name" name="firstname"></div>
                            <div class="col-md-12 form-group"><input type="text" class="form-control"
                                    placeholder="Last Name" name="lastname"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control"
                                    placeholder="Town / City" name="city"></div>
                            <div class="col-md-12 form-group"><input type="text" class="form-control"
                                    placeholder="Country" name="country"></div>
                            <div class="form-group col-12">
                            <select name="category">
                    @foreach($checkid as $a)
                    <option value="{{$a->category}}">{{$a->category}}</option>
                    @endforeach
                        </select>
                    </div>
                            <div class="col-md-12 form-group"><input type="text" class="form-control"
                                    placeholder="Postcode / Zip" name="zipcode"></div>
                            <div class="col-12 form-group" ><input type="email" class="form-control"
                                    placeholder="Email Address" name="email"> </div>
                                    <div class="col-12 form-group" >
                                    <input type="text" class="form-control"
                                    placeholder="Phone number" name="phone"></div>
                    
                        </div>
                    </div>
                   

                </div>
                 <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs"> <h2 class="h4">Payment Method</h2><br><input name="payment" id="payment_method_bacs" type="radio"
                                class="input-radio" name="payment_method" value="bacs" checked="checked"> <label
                                for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in
                                    our account.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque"><input name="payment" id="payment_method_cheque"
                                type="radio" class="input-radio" name="payment_method" value="cheque"> <label
                                for="payment_method_cheque">Cheque Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod"><input name="payment" id="payment_method_cod" type="radio"
                                class="input-radio" name="payment_method"> <label for="payment_method_cod">Credit
                                Cart</label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal"><input name="payment" id="payment_method_paypal"
                                type="radio" class="input-radio" name="payment_method" value="paypal"> <label
                                for="payment_method_paypal">Paypal</label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order"><button type="submit" class="th-btn">Place order</button></div>
                </div>
            </div>
                </form>
           
           
        </div>
    </div>
    @endsection