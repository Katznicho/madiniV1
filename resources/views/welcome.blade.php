<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Digital Mineral Place madini</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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

</head>

<body>

    @include('layouts.header')

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <!-- <h3 class="title">New Products</h3> -->
                        <div class="">
                            <ul class="main-nav nav navbar-nav cats">
                                <!-- <ul> -->
                                <li class="active"><a data-toggle="tab" href="#tab1">Sand</a></li>
                                <li><a data-toggle="tab" href="#tab1">Aggregates</a></li>
                                <li><a data-toggle="tab" href="#tab1">Earth</a></li>
                                <li><a data-toggle="tab" href="#tab1">Dimension Stones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">


                                    @foreach ($products as $product)
                                        <div class="product">
                                            <a href="{{ route('products.show', $product->id) }}" class="product-img">
                                                <div class="product-img">
                                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                                        style="height: 15em;">
                                                    {{-- <img src="{{ asset('img/download.jpeg') }}" alt="" style="height: 15em;"> --}}
                                                    <div class="product-label"></div>
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="lower">
                                                        <div class="add-to-cart-btn">
                                                            <span>Add</span>
                                                            <img src="./img/cart_icon.jpg" alt=""
                                                                style="width: 30px;" class="micon">
                                                        </div>
                                                        <h6 class="product-price">UGX {{ number_format($product->price) }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Value Added</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">



                                    @foreach ($valueAddedProducts as $valueAddedProduct)
                                        <div class="product" style="width: 10px !important; ">
                                            <a href="{{ route('product_details') }}">
                                                <div class="product-img">
                                                    <img src="{{ $valueAddedProduct->image }}"
                                                        alt="{{ $valueAddedProduct->name }}" style="height: 15em;">
                                                    {{-- <img src="./img/download.jpeg" alt="" style="height: 15em;"> --}}
                                                    <div class="product-label"></div>
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $valueAddedProduct->name }}</a>
                                                    </h3>
                                                    <div class="lower">
                                                        <div class="add-to-cart-btn">
                                                            <span>Add</span>
                                                            <img src="./img/cart_icon.jpg" alt=""
                                                                style="width: 30px;" class="micon">
                                                        </div>
                                                        <h6 class="product-price">{{ $valueAddedProduct->price }}</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach






                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <h3 class="" style="text-decoration: underline;">Hardware</h3>
                    <div class="section-title">
                        <h3 class="title">Safety</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-3">



                                    @foreach ($safetyProducts as $safetyProduct)
                                        <div class="product" style="width: 10px !important; ">
                                            <a href="{{ route('product_details') }}">
                                                <div class="product-img">
                                                    <img src="{{ $safetyProduct->image }}"
                                                        alt="{{ $safetyProduct->name }}" style="height: 15em;">
                                                    {{-- <img src="./img/download.jpeg" alt="" style="height: 15em;"> --}}
                                                    <div class="product-label"></div>
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $safetyProduct->name }}</a>
                                                    </h3>
                                                    <div class="lower">
                                                        <div class="add-to-cart-btn">
                                                            <span>Add</span>
                                                            <img src="./img/cart_icon.jpg" alt=""
                                                                style="width: 30px;" class="micon">
                                                        </div>
                                                        <h6 class="product-price">{{ $safetyProduct->price }}</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach






                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->




    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Tools</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-4">



                                    @foreach ($tools as $tool)
                                        <div class="product" style="width: 10px !important; ">
                                            <a href="{{ route('product_details') }}">
                                                <div class="product-img">
                                                    <img src="{{ $tool->image }}" alt="{{ $tool->name }}"
                                                        style="height: 15em;">
                                                    {{-- <img src="./img/download.jpeg" alt="" style="height: 15em;"> --}}
                                                    <div class="product-label"></div>
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $tool->name }}</a>
                                                    </h3>
                                                    <div class="lower">
                                                        <div class="add-to-cart-btn">
                                                            <span>Add</span>
                                                            <img src="./img/cart_icon.jpg" alt=""
                                                                style="width: 30px;" class="micon">
                                                        </div>
                                                        <h6 class="product-price">{{ $tool->price }}</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach






                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    @include('layouts.footer')
    <!-- jQuery Plugins -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

<style>
    /* Define styles for small screens */
    @media only screen and (max-width: 768px) {
        .cats li {
            display: inline-block;
            /* Display li items horizontally */
            margin-right: 10px;
            /* Add some spacing between items */
            color: black;

        }

        .product {
            width: 70%;
            /* Set product width to fill 70% of the screen */
            margin: 0 auto;
            /* Center products horizontally */
            margin-bottom: 20px;
            /* Add some bottom margin */
        }

        .products-slick {
            display: flex;
            /* Use flexbox for product layout */
            flex-wrap: wrap;
            /* Allow products to wrap to the next row */
            justify-content: space-between;
            /* Distribute products evenly */
        }

        .product-body {
            width: 100%;
            /* Make product body take full width */
        }

        .product-name {
            font-size: 1.8rem;
            /* Decrease font size for product name */
        }

        .product-price {
            font-size: 1.2rem;
            /* Decrease font size for product price */
            margin-top: 10px;
            /* Reduce top margin for price */
            margin-left: 0;
            /* Remove left margin for price */
        }
    }



    /* Search bar */

    .section {
        /* margin-top: -4px; */
    }

    .product {}

    #responsive-nav {
        display: flex;
        /* Allow elements to sit side-by-side */
        align-items: center;
        /* Vertically center content */
        justify-content: space-between;
        /* Distribute elements evenly */
        width: 100%;
    }

    .header-search {
        position: relative;
        /* Needed for button positioning */

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

    .fa {
        font-size: 25px;
        margin-right: 5px;
    }

    /* Search bar */

    .fa-shopping-cart {

        float: left !important;
        /* font-size: 40px !important; */
        /* margin-left: 100px; */
        /* margin-left: 10%;
 margin-right: 10%; */
        font-size: 40px !important;
        margin: 10% 0;
        /* Adjust top and bottom margins for alignment */
    }


    .add-to-cart-btn {

        display: none;
        /* Allow elements to sit side-by-side */
        align-items: center;
        /* Vertically center content */
        padding: 5px 10px;
        height: 5rem;
        width: 8rem;
        /* Add some padding */
        border: 2px solid #ddd;
        /* Add a border on right and bottom */

        border-radius: 3px;
        /* Add rounded corners */
        cursor: pointer;
        /* Indicate clickable button */
        /* width: 50%; */
    }

    .product {
        display: flex;
        /* Allow elements to sit side-by-side */
        align-items: center;
        /* Vertically center content */
        padding: 0;
        /* margin: 100px !important; */
        /* margin-right: 10rem !important; */
        /* Add some padding */
        border: 3px solid #ddd;
        /* Add a border on right and bottom */
        border-top: none !important;
        /* Remove border on top */
        border-left: none !important;
        /* Remove border on left */
        border-radius: 3px;
        /* Add rounded corners */
        cursor: pointer;
        /* Indicate clickable button */
    }

    /* small screens keep margin 0 for product */
    @media only screen and (max-width: 600px) {
        .product {
            margin-right: 0 !important;
        }
    }

    .lower {
        justify-self: space-between;
        display: flex;
        /* Allow elements to sit side-by-side */
    }

    .product-name {
        margin-right: 10px;
        font-size: 3rem;
        /* Add spacing between image and text */
        text-align: left;
        /* Center text */
    }

    .product-body {
        justify-content: space-between;
        /* Distribute elements evenly */
        border-radius: 4%;

    }


    .product {
        border-radius: 4%;
    }



    .add-to-cart-btn span {
        margin-right: 5px;
        display: none;
        /* Add spacing between text and icon */
    }

    .product-price {
        /* align items and position them on the same line */
        /* display: flex; */
        /* align-items: center; */
        justify-content: space-between;
        /* make font light */
        /* font-weight: 300; */
        font-size: 1.5rem !important;
        margin-top: 30px;
        margin-left: 10px;

    }
</style>










</html>
