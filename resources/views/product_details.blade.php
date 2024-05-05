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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
                <div class="col-md-4 col-md-push-1">
                    <div id="product-main-img" style="margin-top : 20% !important;">
                        <!-- <div class="product-preview"> -->
                        <img src="{{$product->image_url}}" alt="">
                        <!-- <div class="add-to-cart-btn">
                                <span>Add</span> -->
                        <!-- <i class="fa fa-shopping-cart"></i> -->
                        <!-- <img src="./img/cart_icon.jpg" alt="" style="width: 50px;" class="micon">


                            </div>
                            <h3 class="product-price">UGX 120,000</h3> -->
                        <!-- </div> -->

                    </div>
                    {{-- <div class="add-to-cart-btn">
                        <span>Add</span> --}}
                        <!-- <i class="fa fa-shopping-cart"></i> -->
                        {{-- <img src="./img/cart_icon.jpg" alt="" style="width: 50px;" class="micon">


                    </div> --}}
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
                        <hr>
                        <h2 class="product-name" style="font-size: 12px;">{{ $product->name }}</h2>

                        <div>
                            <!-- <h3 class="product-price">UGX 120,000</h3> -->
                            <span style="font-size: 10px;">25mm aggregate size lake sand</span>


                            <span class="product-available" style="font-size: 10px !important;">Strength</span>


                            <span class="product-available" style="font-size: 10px !important;">Aggregate Size</span>

                        </div>
                        <hr>
                        <!-- <p>25mm aggregate size lake sand</p> -->

                        <div class="add-to-cart buttons">
    <span>{{ $product->description }}</span>
    
    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>

    <div style="margin-right: 10px;"></div>
    <a class="add-to-cart-btn" href="{{ route('productCheckout', $product) }}"><i class="fa fa-shopping-cart"></i> Buy Now</a>
    
    <!-- Back option -->
    <a class="back-btn" href="{{ route('welcome') }}">Back</a>
</div>




                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Sand</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="section-title text-left ">
                                            <h3 class="title">Similar Items</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">


                                        <div class="product s product1" style = "margin-right: 1rem !important;">
                                            <div class="product-img">
                                                <img src="./img/download.jpeg" alt="">
                                                <div class="product-label">
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                                <div class="lower">

                                                    <div class="add-to-cart-btn similar-cart" >
                                                        <span>Add</span>
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <!-- <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                            class="micon"> -->
                                                    </div>
                                                    <h6 class="product-price" 1>UGX {{ number_format($product->price) }}</h6>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-6">


                                        <!-- product -->
                                        <div class="product s product1"  style = "margin-right: 1rem !important;">
                                            <div class="product-img">
                                                <img src="./img/download.jpeg" alt="">
                                                <div class="product-label">
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                                <div class="lower">

                                                    <div class="add-to-cart-btn similar-cart">
                                                        <span>Add</span>
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <!-- <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                            class="micon"> -->
                                                    </div>
                                                    <h6 class="product-price" 1>UGX 120,000</h6>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix visible-sm visible-xs"></div>
                                    </div>



                                    <!-- /row -->
                            </li>
                        </ul>

                        <!-- <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul> -->

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
                                            {{
                                                $product->description
                                            }}
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
                                                            They offered me good buiding advice, the team has great experts, they helped guide me on quality building standards
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
                                                            I was able to get the best sand for my building needs, the team was very helpful and the delivery was on time.
                                                            I will surely be using them for all my building needs and highly recommmend them.
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
                                                        <input id="star5" name="rating" value="5" type="radio"><label
                                                            for="star5"></label>
                                                        <input id="star4" name="rating" value="4" type="radio"><label
                                                            for="star4"></label>
                                                        <input id="star3" name="rating" value="3" type="radio"><label
                                                            for="star3"></label>
                                                        <input id="star2" name="rating" value="2" type="radio"><label
                                                            for="star2"></label>
                                                        <input id="star1" name="rating" value="1" type="radio"><label
                                                            for="star1"></label>
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
                                    <div class="product product1">
                                        <div class="product-img">
                                            <img src="./img/download.jpeg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                            <div class="lower">

                                                {{-- <div class="add-to-cart-btn">
                                                    <span>Add</span>
                                                    <!-- <i class="fa fa-shopping-cart"></i> -->
                                                    <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                        class="micon">
                                                </div> --}}
                                                <h6 class="product-price" 1>UGX 120,000</h6>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/download.jpeg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                            <div class="lower">

                                                {{-- <div class="add-to-cart-btn">
                                                    <span>Add</span>
                                                    <!-- <i class="fa fa-shopping-cart"></i> -->
                                                    <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                        class="micon">
                                                </div> --}}
                                                <h6 class="product-price" 1>UGX 120,000</h6>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/download.jpeg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                            <div class="lower">

                                                {{-- <div class="add-to-cart-btn">
                                                    <span>Add</span>
                                                    <!-- <i class="fa fa-shopping-cart"></i> -->
                                                    <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                        class="micon">
                                                </div> --}}
                                                <h6 class="product-price" 1>UGX 120,000</h6>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/download.jpeg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                            <div class="lower">

                                                {{-- <div class="add-to-cart-btn">
                                                    <span>Add</span>
                                                    <!-- <i class="fa fa-shopping-cart"></i> -->
                                                    <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                        class="micon">
                                                </div> --}}
                                                <h6 class="product-price" 1>UGX 120,000</h6>


                                            </div>
                                        </div>
                                    </div>



                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/download.jpeg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Lake Sand</a></h3>
                                            <div class="lower">

                                                {{-- <div class="add-to-cart-btn" >
                                                    <span>Add</span>
                                                    <!-- <i class="fa fa-shopping-cart"></i> -->
                                                    <img src="./img/cart_icon.jpg" alt="" style="width: 30px;"
                                                        class="micon">
                                                </div> --}}
                                                <h6 class="product-price" 1>UGX 120,000</h6>


                                            </div>
                                        </div>
                                    </div>

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


.buttons {
    /* either they are positioned horizontally on same line */
    display: flex;
    justify-content: space-between;
    /* margin: 20%; */

}

.similar-cart {
    display: none !important;
}

/* on small screens display vertical */
@media (max-width: 600px) {
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

















.add-to-cart-btn {
    display: flex;
    /* Allow elements to sit side-by-side */
    align-items: left !important;

    text-align: left !important;
    /* Vertically center content */


    padding: 5px 10px;
    /* Add some padding */
    border: 2px solid #ddd;
    /* Add a border on right and bottom */

    border-radius: 3px;
    /* Add rounded corners */
    cursor: pointer;
    /* Indicate clickable button */
    width: 20rem !important;
    height: 5rem !important;
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
    .sproduct {
        margin-right: 10rem !important;
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
    width: 100%;
    }

    .sproduct .product-img {
        width: 100%;
    }
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
    /* Add spacing between image and text */
    text-align: left;
    /* Center text */
}




.add-to-cart-btn {
    display: flex;
    /* Allow elements to sit side-by-side */
    align-items: center;
    /* Vertically center content */
    padding: 5px 10px;
    margin-right: 5px;
    height: 6rem;
    width: 10rem ;
    /* Add some padding */
    border: 2px solid #ddd;
    /* Add a border on right and bottom */

    border-radius: 3px;
    /* Add rounded corners */
    cursor: pointer;
    /* Indicate clickable button */
    /* width: 50%; */
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