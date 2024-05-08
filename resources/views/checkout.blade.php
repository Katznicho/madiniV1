<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Madini</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- International Telephone Input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/20.2.0/css/intlTelInput.css">

    <style>
        /* Add custom CSS styles for curved borders */
        .order-details {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- include header -->
    @include('layouts.header')


    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">CONFIRM AND PAY</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
                            <form method="POST" action="{{route('placeOrder') }}" class="rounded-full ">
                           @csrf 
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <!-- Product Details -->
                    <div class="product-details">
                        <div class="section-title">
                            <h3 class="title">Your Order Details</h3>
                        </div>
                        <!-- Add product details here -->
                        {{-- <img src="{{ $product->image_url }}" alt="{{ $product->name }}" /> --}}
                        <p style="font-weight: 900;"> Quantity:</p>
                        <p>1 x {{ $product->name }}</p>

                        <p style="font-weight: 900;"> Deliver To:</p>
                        <p>Muyenga {{ $product->name }}</p>
                        {{-- add edit button right aligned --}}
                        <hr />



                        <!-- Phone number input -->
                        <div class="phone-number">
                            <div class="section-title">
                                <h5 class="title">Phone Number</h5>
                            </div>
                            <div class="form-group phone">
                                <input class="input phone" type="tel" id="phone" name="phone"style=" "
                                    placeholder="0701234567">
                            </div>
                            <p>We call or text you to confirm your number. Standard Message and data rates may apply. <a
                                    href="#">Privacy Policy</a></p>
                        </div>
                        <!-- /Phone number input -->

                    </div>
                    <!-- /Product Details -->

                    <hr />


                    <!-- Enter ASM Coupon -->

                    <!-- /Enter ASM Coupon -->


                    <!-- Shiping Details -->
                    <div class="shiping-details">

                        <div class="input-checkbox">
                            <a>
                                <input type="checkbox" id="shiping-address" class="hidden" style="display: none;">
                                <label for="shiping-address">

                                    <h4 class="" style="text-decoration: underline; color:grey;">Enter ASM Coupon
                                    </h4>

                                </label>
                                <div class="caption">

                                    {{-- <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="Email">
                                    </div> --}}
                                    <div class="form-group">
                                        <input class="input" type="text" name="coupon" placeholder="ASM Coupon">
                                    </div>



                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /Shiping Details -->

                    <!-- Pay with -->
                    <div class="pay-with row">
                        <div class="section-title">
                            <h3 class="title">Pay with</h3>
                        </div>


                        <!-- Add Pay with icons (Google Pay, Visa, Mastercard) here -->
                        <div class="payment-method">
                            <label for="payment-airtel-money">
                                <i class="fa fa-mobile"><img src="{{ asset('img/airtel.jpg') }}" width="90"
                                        height="40" alt="airtel"> </i>
                            </label>
                            <label for="payment-mtn-momo">
                                {{-- random svg --}}

                                <i class="fa fa-mobile"><img src="{{ asset('img/mtn.jpg') }}" width="90"
                                        height="40" alt="airtel"> </i>
                            </label>

                            <label for="payment-google-pay">
                                <i class="fa fa-mobile"><img src="{{ asset('img/gpay.jpg') }}" width="90"
                                        height="40" alt="airtel"> </i>
                            </label>
                            <label for="payment-mastercard">
                                <i class="fa fa-mobile"><img src="{{ asset('img/mastercard.jpg') }}" width="70"
                                        height="40" alt="airtel"> </i>
                            </label>
                            <label for="payment-visa">
                                <i class="fa fa-mobile"><img src="{{ asset('img/visa.jpg') }}" width="70"
                                        height="40" alt="airtel"> </i>
                            </label>

                            <!-- Hide the radio buttons -->
                            <input type="radio" name="payment" id="payment-mtn-momo" style="display: none;">
                            <input type="radio" name="payment" id="payment-airtel-money" style="display: none;">
                            <input type="radio" name="payment" id="payment-google-pay" style="display: none;">
                            <input type="radio" name="payment" id="payment-visa" style="display: none;">
                            <input type="radio" name="payment" id="payment-mastercard" style="display: none;">
                        </div>

                        <!-- /Pay with -->

                        <div class="section-title">
                            <h3 class="title">Pay on Delivery</h3>
                            <p> Pay by cash on delivery. Non-refundable COD fees of <strong> UGX 10,000 </strong> may
                                apply. <a href="#" style="text-decoration: underline;"> Learn More. </a></p>
                            <p> Pay online for a contactless delivery.</p>
                        </div>


                            <div class="">
                                <button type="submit" class="primary-btn order-submit flex"
                                    style="background-color: #d90166; border-radius: 5%; width: 560px;">Purchase</button>
                            </div>

                            <p> By clicking "Purchase", I agree to <a href="#"
                                    style="text-decoration: underline;"> Madini's policy </a> , <a
                                    style="text-decoration: underline;" href="#"> Delivery and Refund Policy
                                </a> and that Madini can charge my payment method if items have been ordered.</p>
                        </form>

                    </div>
                    <!-- /Pay with -->





                    <!-- Billing Details -->
                    <div class="billing-details">


                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Create an account with Madini to get customized construction experience from our
                                        experts and authentic building materials.</p>
                                    <input class="input" type="password" name="password"
                                        placeholder="Enter Your Password">
                                </div>
                            </div>


                            <div class="input-checkbox">
                                <input type="checkbox" id="terms">
                                <label for="terms">
                                    <span></span>
                                    I've read and accept the <a href="#">terms & conditions</a>
                                </label>
                            </div>
                        </div>


                    </div>
                    <!-- /Billing Details -->
                </div>
                <!-- /Left Column -->

                <div class="col-md-2">
                </div>
                <!-- Right Column -->
                <div class="col-md-4"
                    style="border: 1px black solid; padding: 2%; border-radius: 2%; position: sticky; top: 20%;">
                    <!-- Order Details -->
                    <form method="POST" action="{{ route('placeOrder') }}" class="">
                        <div class="row ">
                            <div class="col-md-6">
                                {{-- Add dummy image --}}
                                {{-- <img src="{{ $product->image_url }}" style="justify-content: center;" alt="{{ $product->name }} " /> --}}
                                <img src="{{ asset('img/download.jpeg') }}" alt="{{ $product->name }} " />
                            </div>
                            <div class="col-md-6" style="margin-top: 12%;">
                                {{-- Add product name --}}
                                <h3>{{ $product->name }}</h3>

                                <p> 25 mm Lake Sand </p>
                                {{-- Add product price --}}
                                <h4>UGX {{ number_format($product->price) }}</h4>

                                {{-- add rating 5 star --}}
                                <div class="rating">
                                    <div class="rating">
                                        <i class="fa fa-star fa-2x">5.00 (1)</i>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                            <input type="hidden" name="product_name" value="{{ $product->name }}" />
                            <input type="hidden" name="product_price" value="{{ $product->price }}" />
                            <hr />
                            <div class="order-summary">
                                <div class="order-col">
                                    <div><strong>Price Details</strong></div>
                                    <div><strong>TOTAL</strong></div>
                                </div>
                                <div class="order-products">
                                    <div class="order-col">
                                        <div>{{ $product->name }} x 1 Tonne</div>

                                        <div>UGX {{ number_format($product->price) }}</div>
                                    </div>
                                </div>
                                <div class="order-col">
                                    <div style="text-decoration:underline;">Madini Service Fee</div>
                                    <div><strong>UGX 12,000</strong></div>
                                </div>

                                <hr />
                                <div class="order-col">
                                    <div><strong>TOTAL</strong></div>
                                    <div><strong class="order-total">UGX {{ number_format($product->price) }}</strong>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <!-- /Order Details -->
                </div>
                <!-- /Right Column -->

                <!-- /Right Column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    @include('layouts.footer')

    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- International Telephone Input -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/20.2.0/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/20.2.0/js/utils.js"></script>

    <script>
        // Initialize International Telephone Input
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "ug",
            strictMode: true,
            utilsScript: "/intl-tel-input/js/utils.js" // just for formatting/placeholders etc
        });
    </script>


    <style>
        /* Add custom CSS styles for curved borders */
        .order-details {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .m-search-icon {
            display: none;

            float: right !important;
        }

        .m-search-icon {
            display: none;
        }


        .button {
            background-color: white;
            /* Green */
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
        }

        @media only screen and (max-width: 600px) {
            .m-search-icon {
                display: block;
            }

            .search-icon {
                display: none;
            }

            .button {
                background-color: white;
                /* Green */
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
            }

            .order-submit {
                width: 100% !important;
            }

            .order-details {
                background-color: #f9f9f9;
                border-radius: 15px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .order-summary {
                background-color: #f9f9f9;
                border-radius: 15px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .order-col {
                display: flex;
                justify-content: space-between;
            }

            .order-products {
                display: flex;
                justify-content: space-between;
            }

            .order-total {
                color: deeppink;
            }

            .order-summary {
                background-color: #f9f9f9;
                border-radius: 15px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .order-col {
                display: flex;
                justify-content: space-between;
            }

            .order-products {
                display: flex;
                justify-content: space-between;
            }

            .order-total {
                color: deeppink;
            }

            .order-summary {
                background-color: #f9f9f9;
                border-radius: 15px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .order-col {
                display: flex;
                justify-content: space-between;
            }

            .order-products {
                display: flex;
                justify-content: space-between;
            }

            .order-total {
                color: deeppink;
            }

            .order-summary {
                background-color: #f9f9f9;
                border-radius: 15px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .order-col {
                display: flex;
                justify-content: space-between;
            }

            .order-products {
                display: flex;
                justify-content: space-between;
            }

            .order-total {
                color: deeppink;
            }

            .input {
                width: 100% !important;
            }

        }

        .m-search {
            display: none !important;
        }
    </style>

</body>

</html>
