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
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" />
                        <h3>{{ $product->name }}</h3>
                        <h4>UGX {{ number_format($product->price) }}</h4>
                    </div>
                    <!-- /Product Details -->

                    <hr />

                    <!-- Pay with -->
                    <div class="pay-with">
                        <div class="section-title">
                            <h3 class="title">Pay with</h3>
                        </div>
                        <!-- Add Pay with buttons (Google Pay, Visa, Mastercard) here -->
                        <div class="payment-method">
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-google">
                                <label for="payment-google">
                                    <span></span>
                                    Google Pay
                                </label>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-visa">
                                <label for="payment-visa">
                                    <span></span>
                                    Visa
                                </label>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-mastercard">
                                <label for="payment-mastercard">
                                    <span></span>
                                    Mastercard
                                </label>
                            </div>
                        </div>

                        <div class="">

                            <button type="submit" class="primary-btn order-submit"
                                style="background-color: deeppink; border-radius: 10%;">Continue and Pay</button>

                        </div>
                    </div>
                    <!-- /Pay with -->

                    <!-- Enter ASM Coupon -->
                    <div class="enter-coupon">
                        <div class="section-title">
                            <h3 class="title">Enter ASM Coupon</h3>
                        </div>
                        <input class="input" type="text" name="asm_coupon" placeholder="Enter ASM Coupon">
                    </div>
                    <!-- /Enter ASM Coupon -->

                    <!-- Phone number input -->
                    <div class="phone-number">
                        <div class="section-title">
                            <h3 class="title">Phone Number</h3>
                        </div>
                        <div class="form-group phone">
                            <input class="input phone" type="tel" id="phone" name="phone"
                                placeholder="0701234567">
                        </div>
                    </div>
                    <!-- /Phone number input -->
                </div>
                <!-- /Left Column -->

                <!-- Right Column -->
                <div class="col-md-6 ">
                    <!-- Order Details -->
                    <form method="POST" action="{{ route('placeOrder') }}" class="order-details">

                        {{-- add dummy image --}}
                        <img src="{{ $product->image_url }}" style="justify-content: center;"
                            alt="{{ $product->name }} " />
                        {{-- add product name --}}
                        <h3>{{ $product->name }}</h3>
                        {{-- add product price --}}
                        <h4>UGX {{ number_format($product->price) }}</h4>

                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="product_name" value="{{ $product->name }}" />
                        <input type="hidden" name="product_price" value="{{ $product->price }}" />
                        <div class="order-summary">
                            <div class="order-col">
                                <div><strong>PRODUCT</strong></div>
                                <div><strong>TOTAL</strong></div>
                            </div>
                            <div class="order-products">
                                <div class="order-col">
                                    <div>{{ $product->name }}</div>
                                    <div>UGX {{ number_format($product->price) }}</div>
                                </div>
                            </div>
                            <div class="order-col">
                                <div>Shipping</div>
                                <div><strong>FREE</strong></div>
                            </div>
                            <div class="order-col">
                                <div><strong>TOTAL</strong></div>
                                <div><strong class="order-total">UGX {{ number_format($product->price) }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                I've read and accept the <a href="#">terms & conditions</a>
                            </label>
                        </div>
                        <!-- "Place order" button -->

                    </form>
                    <!-- /Order Details -->

                    <!-- Continue with -->
                    <div class="continue-with">
                        <div class="section-title">
                            <h3 class="title">Continue with</h3>
                        </div>
                        <!-- Add Continue with buttons (Google, Facebook, Apple) here -->
                        <div class="continue-with-buttons">
                            <button type="button" class="btn-google">Google</button>
                            <button type="button" class="btn-facebook">Facebook</button>
                            <button type="button" class="btn-apple">Apple</button>
                        </div>

                        <div class="">
                            <button type="button" class="btn-google mt-4 p-5">Continue with Email</button>

                        </div>
                    </div>
                    <!-- /Continue with -->
                </div>
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
    </style>

</body>

</html>
