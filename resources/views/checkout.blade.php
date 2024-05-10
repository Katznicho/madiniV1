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
    <form method="POST" action="{{ route('placeOrder') }}" class="rounded-full ">
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
                            <div class = "quantities">
                                <p style="font-weight: 900; text-align: left"> Quantity:</p>
                                <p>1 x {{ $product->name }}

                                    <i class="fa fa-plus" style="float: right; color: #007bff;">
                                    </i>
                                    {{-- add quantity input field here --}}
                                    <input type="number" name="quantity" value="1" min="1" max="100"
                                        style="float: right; margin-left: 0.5%; margin-right: 0.5%; margin-bottom: 1.5% !important;" />
                                    <i class="fa fa-minus" style="float: right ; color: #007bff;">
                                    </i>
                                </p>
                            </div>
                            <div class="deliveries">
                                <p style="font-weight: 900;  text-align: left;"> Deliver To:</p>

                                <p style="margin-right: 10px; text-align: left;">Muyenga {{ $product->name }} <a
                                        href="#" style="color: #007bff; "><i class="fa fa-pencil"
                                            style="float: right">
                                        </i>
                                    </a>
                                </p>


                            </div>
                            {{-- add edit button right aligned --}}
                            <hr />



                            <!-- Phone number input -->
                            <div class="phone-number">
                                <div class="section-title">
                                    <h5 class="title">Required for your delivery</h5>
                                    <p> Add and confirm your phone number below to get delivery updates. </p>
                                </div>
                                <div class="form-group phone" style="width: 100% !important;">
                                    <input class="input phone" type="tel" id="phone" name="phone"style=" "
                                        placeholder="0701234567">
                                </div>
                                <p>We call or text you to confirm your number. Standard Message and data rates may
                                    apply. <a href="#">Privacy Policy</a></p>
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
                                    <input type="checkbox" id="shiping-address" class="hidden"
                                        style="display: none !important;">
                                    <label for="shiping-address">

                                        <h4 class="" style="text-decoration: underline; color:grey;">Enter ASM
                                            Coupon
                                        </h4>

                                    </label>
                                    <div class="caption">

                                        {{-- <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="Email">
                                    </div> --}}
                                        <div class="form-group">
                                            <input class="input" type="text" name="coupon"
                                                placeholder="ASM Coupon">
                                        </div>



                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Shiping Details -->

                        <!-- Pay with -->
                        <div class="pay-with row" style="justify-content: space-between;  width: 100%;">
                            <div class="section-title">
                                <input type="radio" name="payment" id="payment-mtn-momo">
                                <h3 class="title" style="text-decoration: none !important;">Pay with</h3>
                            </div>


                            <!-- Add Pay with icons (Google Pay, Visa, Mastercard) here -->
                            <div class="payment-method" style="justity-content: space-between;">
                                <label for="payment-airtel-money">
                                    <i class=""><img src="{{ asset('img/airtel.jpg') }}" width="90"
                                            height="40" alt="airtel"> </i>
                                </label>
                                <label for="payment-mtn-momo">
                                    {{-- random svg --}}

                                    <i class=""><img src="{{ asset('img/mtn.jpg') }}" width="90"
                                            height="40" alt="airtel"> </i>
                                </label>

                                <label for="payment-google-pay">
                                    <i class=""><img src="{{ asset('img/gpay.jpg') }}" width="90"
                                            height="40" alt="airtel"> </i>
                                </label>
                                <label for="payment-mastercard">
                                    <i class=""><img src="{{ asset('img/mastercard.jpg') }}" width="70"
                                            height="40" alt="airtel"> </i>
                                </label>
                                <label for="payment-visa">
                                    <i class=""><img src="{{ asset('img/visa.jpg') }}" width="70"
                                            height="40" alt="airtel"> </i>
                                </label>

                                <!-- Hide the radio buttons -->
                                <input type="radio" name="payment" id="payment-mtn-momo" style="display: none;">
                                <input type="radio" name="payment" id="payment-airtel-money"
                                    style="display: none;">
                                <input type="radio" name="payment" id="payment-google-pay" style="display: none;">
                                <input type="radio" name="payment" id="payment-visa" style="display: none;">
                                <input type="radio" name="payment" id="payment-mastercard" style="display: none;">
                            </div>

                            <!-- /Pay with -->

                            <div class="section-title">
                                <input type="radio" name="payment" id="payment-cod">
                                <h3 class="title" style="text-decoration: none !important;">Pay on Delivery</h3>
                                <p> Pay by cash on delivery. Non-refundable COD fees of <strong> UGX 10,000 </strong>
                                    may apply. <a href="#" style="text-decoration: underline;"> Learn More. </a>
                                </p>
                                <p> Pay online for a contactless delivery.</p>
                            </div>


                            <div class="">
                                <button type="submit" class="primary-btn order-submit flex"
                                    style="background-color: #DE1D40; border-radius: 5%; ">Purchase</button>
                            </div>

                            <p> By clicking "Purchase", I agree to <a href="#"
                                    style="text-decoration: underline;"> Madini's policy </a> , <a
                                    style="text-decoration: underline;" href="#"> Delivery and Refund Policy
                                </a> and that Madini can charge my payment method if items have been ordered.
                            </p>
                        </div>


    {{-- </div> --}}
            </form>
    <!-- /Pay with -->





    <!-- Billing Details -->
    <div class="billing-details">





    </div>
    <!-- /Billing Details -->
    </div>
    <!-- /Left Column -->

    <div class="col-md-1">
    </div>
    <!-- Right Column -->
    <div class="col-md-5"
        style="border: 1px black solid; padding: 2%; border-radius: 2%; position: sticky; top: 20%; margin: 2%;">
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

                <div>
                    <hr>
                    {{-- add horizontal line  --}}
                </div>




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

</body>

</html>


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

    /*  .m-search-icon {
        display: none;

        float: right !important;
    }
*/



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



    .footer {
        bottom: 0 !important;

    }


    .m-search {
        display: block;
        /* Makes the input take full width */
        /* width: 100%; */
        /* Fills remaining space in parent */
        padding: 10px 10px 10px 10px;
        /* Adjust padding as needed */
        border: 1px solid #ccc;
        border-radius: 30px;
        /* Add curved corners */
        height: 6rem;
        width: 60rem;
        /* Set input height */
        /* width: 30rem; */
    }

    .m-search-btn {
        position: absolute;
        /* Positions button inside input */
        top: 0;
        right: 10px;
        /* Adjust right padding for icon placement */
        bottom: 0;
        padding: 0;
        border: none;
        background-color: transparent;
        cursor: pointer;

    }

    .m-search-icon {
        fill: #ccc;
        /* Change color as needed */
        width: 14px;
        height: 14px;
        /* margin-right: 500px; */
    }

    /* Style checkboxes */
    input[type="checkbox"] {
        display: inline-flex;
        /* Hide the actual checkboxes */
    }

    /* Style labels for checkboxes */
    input[type="checkbox"]+label {
        display: inline-flex;
        align-items: center;
        margin-right: 10px;
        cursor: pointer;
    }

    /* Style custom checkbox appearance */
    input[type="checkbox"]+label:before {
        content: "";
        display: none;
        width: 20px;
        height: 20px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-right: 5px;
        background-color: #fff;
    }

    /* Style custom checkbox checked state */
    input[type="checkbox"]:checked+label:before {
        background-color: #007bff;
        /* Change to desired color */
    }

    /* Style text of labels */
    input[type="checkbox"]+label {
        color: #333;
        /* Change to desired color */
        font-size: 14px;
    }
</style>
