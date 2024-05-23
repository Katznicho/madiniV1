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
</head>

<body>
    <!-- HEADER -->
    @include('layouts.header')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-1 prod" style="">
                    <div id="product-main-img">
                        <img src="{{ $product->image_url }}" alt="" height= "200" width="200">
                    </div>
                    <h3 class="product-price" style="text-align: center;">UGX {{ number_format($product->price) }}</h3>
                </div>
                <!-- /Product main img -->
                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-0">
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h3 class="title" style="text-decoration: underline;"></h3>
                        {{-- <hr> --}}
                        <h2 class="product-name" style="font-size: 12px; text-decoration: underline;">
                            {{ $product->name }}</h2>
                        <div>
                            <!-- <h3 class="product-price">UGX 120,000</h3> -->
                            <span style="font-size: 10px;">25mm aggregate size lake sand</span>
                            <span class="product-available" style="font-size: 10px !important;">Strength</span>
                            <span class="product-available" style="font-size: 10px !important;">Aggregate Size</span>
                        </div>
                        <hr style="padding: 0 !important; margin: 3% !important;">


                        <div class="add-to-cart buttons">
                            {{-- <span>{{ $product->description }}</span> --}}
                            <p style="margin-right: 20px;"> <strong> Ideal for Plaster </strong> <br>
                                <span style="font-size: 10px;"> Locally sourced from Lwera, Masaka </span>
                            </p>


                            <button class="add-to-cart-btn web "
                                style="font-size: 12px; background-color: white !important; color: black !important; border: 1px grey solid;  "><i
                                    class=" fa fa-shopping-cart"></i> Add to Cart</button>

                            <a href="{{ route('productCheckout', $product) }}" style="color:white;">
                                <button class="add-to-cart-btn buy web "
                                    style="font-size: 12px; background-color: #DE1D40 !important; color: white !important;  ">
                                    Buy Now
                                </button>
                            </a>

                            <div class = "buts" >
                                <button class="add-to-cart-btn "
                                style="font-size: 12px; background-color: white !important; color: black !important; border: 1px grey solid;  "><i
                                    class=" fa fa-shopping-cart"></i> Add to Cart</button>

                            <a href="{{ route('productCheckout', $product) }}" style="color:white;">
                                <button class="add-to-cart-btn buy "
                                    style="font-size: 12px; background-color: #DE1D40 !important; color: white !important;  ">
                                    Buy Now
                                </button>
                            </a>
                            </div>


                        </div>

                        <ul class="product-links">
                            <li style="color: black;">Category:</li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Sand</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>
                                <div class="row similar">

                                    <div class="col-md-12">
                                        <div class="section-title text-left ">
                                            <h3 class="title">Similar Items</h3>
                                        </div>
                                    </div>
                                    @foreach ($similarItems as $similarItem)
                                        <a href="{{ route('products.show', $similarItem->id) }}" class="product-img">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="product s product1"
                                                    style="width: 20em; height: 20em; border: 1px grey solid !important;">
                                                    <div class="product-img">
                                                        {{-- <img src="./img/download.jpeg" alt=""> --}}
                                                        <img src="{{ $similarItem->image_url }}" alt=""
                                                            height="130" style="padding: 5%;">

                                                        <div class="product-label">
                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a
                                                                href="#">{{ $similarItem->name }}</a></h3>
                                                        <div class="lower">
                                                            {{-- <img src="{{ asset('img/download.jpeg') }}" alt="" style="height: 15em;"> --}}


                                                            <div class="add-to-cart-btn similar-cart">
                                                                <span>Add</span>
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <img src="{{ asset('img/cart_icon.jpg') }}"
                                                                    alt="" style="width: 30px;" class="micon">
                                                            </div>
                                                            <h6 class="product-price" 1>UGX
                                                                {{ number_format($product->price) }}</h6>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>




                                <!-- /row -->
                            </li>
                        </ul>



                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab2">Details</a></li>
                            <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <!-- take about sand as a construction material -->
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                        <ul>
                                            <li>Granular size: 25mm</li>
                                            <li>Source: Lwera Masaka</li>
                                            <li>Delivery: On demand</li>
                                            <li>Booking: Required</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->

                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Rating -->
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Rating -->

                                    <!-- Reviews -->
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">Nicholas Katende</h5>
                                                        <p class="date">12th, Apr 2024, 7:12 AM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Sand was delivered right on time, highly recommended.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">Bruce </h5>
                                                        <p class="date">4th Jan 2024, 8:30 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>
                                                            They offered me good buiding advice, the team has great
                                                            experts, they helped guide me on quality building standards
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">Wogute David Samuel</h5>
                                                        <p class="date">13th Jun 2023, 8:10 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>
                                                            I was able to get the best sand for my building needs, the
                                                            team was very helpful and the delivery was on time.
                                                            I will surely be using them for all my building needs and
                                                            highly recommmend them.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Reviews -->

                                    <!-- Review Form -->
                                    <div class="col-md-3">
                                        <div id="review-form">
                                            <form class="review-form">
                                                <input class="input" type="text" placeholder="Your Name">
                                                <input class="input" type="email" placeholder="Your Email">
                                                <textarea class="input" placeholder="Your Review"></textarea>
                                                <div class="input-rating">
                                                    <span>Your Rating: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5"
                                                            type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4"
                                                            type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3"
                                                            type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2"
                                                            type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1"
                                                            type="radio"><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <button class="primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
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
                                        <div class="product" style="margin: 2% 4%;">
                                            <a href="{{ route('products.show', $valueAddedProduct->id) }}">
                                                <div class="product-img">
                                                    <img src="{{ $valueAddedProduct->image_url }}"
                                                        alt="{{ $valueAddedProduct->name }}" style="height: 12em;">
                                                    {{-- <img src="./img/download.jpeg" alt="" style="height: 15em;"> --}}
                                                    <div class="product-label"></div>
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="{{ route('products.show', $valueAddedProduct->id) }}">{{ $valueAddedProduct->name }}</a>
                                                    </h3>
                                                    <div class="lower">
                                                        {{-- <div class="add-to-cart-btn">
                                                            <span>Add</span>
                                                            <img src="./img/cart_icon.jpg" alt=""
                                                                style="width: 30px;" class="micon">
                                                        </div> --}}
                                                        <h6 class="product-price">UGX
                                                            {{ number_format($valueAddedProduct->price) }}</h6>
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

    {{-- @include('layouts.footer') --}}
    <!-- jQuery Plugins -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>


<style>
    .prod {
        border: 1px solid grey;
        margin-top: 5%;
        height: 25em;
        width: 32em;
    }


    .buy {
        width: 100% !important;
    }






    .buttons {
        /* either they are positioned horizontally on same line */
        display: flex;
        justify-content: space-between;
        /* margin: 20%; */

    }

    .similar-cart {
        display: none !important;
    }

    .buts {
     display: none;
    }

    /* on small screens display vertical */
    @media (max-width: 600px) {
        .similar {
            display: none;
        }
        .prod {
            /* border: 1px solid grey; */

            height: 100%;
            width: 90%;
            margin: 5% !important;
            border: none !important;
        }

        .add-to-cart-btn {
            width: 50% !important;
            margin: 1%;
        }

        .buy {
            width: 50% !important;
        }



        .product {

            /* Set product width to fill 70% of the screen */
            /* margin: 0 auto !important; */
            /* Center products horizontally */
            margin: 2% 2% !important;
            /* Add some bottom margin */
            padding: 0% !important;

        }

        .buttons {
            flex-direction: column;
            /* margin : 10%; */
            /* padding: 10%; */
            /* add space between the buttons */
            justify-self: unset;
            justify-content: space-between;
            justify-items: center;

        }
    }



















    .product {

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


    .sproduct {

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

    @media only screen and (max-width: 600px) {
        .add-to-cart {
            display: inline;
            position: relative
                /* background: #DE1D40; */
        }



        .sproduct {
            margin-right: 10rem !important;
            /* Add some padding */
            /* border: 3px solid #ddd; */
            /* Add a border on right and bottom */
            border-top: none !important;
            /* Remove border on top */
            border-left: none !important;
            /* Remove border on left */
            border-radius: 3px;
            /* Add rounded corners */
            cursor: pointer;
            /* Indicate clickable button */
            width: 100%;
        }

        .sproduct .product-img {
            width: 100%;
        }

        .m-search-icon {
            display: none;
        }
    }

    /* small screens keep margin 0 for product */
    @media only screen and (max-width: 600px) {

        .web {
            display: none;
        }

        .buy {
            width: 120% !important;
        }

        .buts {
            display: flex;
            /* position: absolute; */
        }
        .product {
            margin-right: 0 !important;
            border: none !important;
        }

        .product-img-main {
            border: 0px !important;
        }

        .m-search-icon {
            display: flex;
        }
    }

    .lower {
        justify-self: space-between;
        display: flex;
        /* Allow elements to sit side-by-side */
    }

    .product-name {
        margin-right: 10px;
        /* Add spacing between image and text */
        text-align: left;
        /* Center text */
    }






    /* .buy {
        width: 110% !important;
    } */

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

    .add-to-cart-btn {
        width: 30%;
        margin: 1%;
    }
</style>





</html>
