<header class="header mobile head" style="display: flex;">
    <div class="header-search mobile-search">
        <form class="mobile-search">
            <input class="m-search" type="text" placeholder="Search here" role="search" style="padding: 10px;">
            <button type="submit" class="m-search-btn"  style="padding: 10px;">
                <i class=" m-search-icon fa fa-search m-search-icon "  style="padding: 10px;"></i>
            </button>
        </form>



    </div>

    {{-- <nav id="navigation" class = "mobile-nav"> --}}
    {{-- <div id="responsive-nav" class="mobile-nav"> --}}
    <div class="mobile-nav">
        <ul class="main-nav nav  navbar-nav items" style="text-align: center">
            <li class="active mitems">
                <img src="./img/sand_icon.jpg" alt="" style="width: 3.7rem;" class="micon">
                <a href="#" style="margin-top: 0px;">Construction</a>
            </li>
            <li>
                <img src="./img/industry_icon.jpg" alt="" style="width: 4.5rem;" class="micon">
                <a href="#" style="font-weight: lighter;">Industrial</a>
            </li>
            <li>
                <img src="./img/precious_icon.jpg" alt="" style="width: 2.8rem;" class="micon">
                <a href="#" style="font-weight: lighter;">Critical</a>
            </li>
        </ul>
    </div>





    {{-- <div class="user-info mobile-user" id="mobile-user">
        <img src="./img/user_icon.jpg" alt="" style="width: 4rem;" class="micon">
        <span>Sign in</span>
    </div> --}}
</header>





<header class="header" style="display: flex;">


    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="logo">
    <div class="info-container header-links mlinks"
        style="justify-content: space-between !important;  padding: 15px 20px !important; border: 0 !important;">
        <!-- <i class="fa fa-map-marker"></i> -->
        <img src="{{ asset('img/delivery_icon.jpg') }}" alt="" style="width: 2rem; " class="micon">
        <!-- <p>Delivery</p> -->
        <div class="header-links pull-left">

            <p style="font-weight: 200; padding-left: 10px;">Delivery</p>

            <span style="font-weight: bold; padding-left: 10px;">Muyenga</span>
        </div>
        <hr class="pull-middle" style="margin-left : 50px !important; margin-right: 30px !important;">
        <!-- <i class="fa fa-money"></i> -->
        <img src="{{ asset('img/ASM_icon.jpg') }}" alt="" style="width: 3rem;" class="micon">
        <div class="pull-right">
            <p style="font-weight: 200; padding-left: 10px;">ASM Impact</p>
            <span style="font-weight: bold; padding-left: 10px;">1,218 ASM impacted</span>
        </div>
    </div>
    <div class="user-info web">
        <!-- <i class="fa fa-user"></i> -->
        <img src="{{ asset('img/user_icon.jpg') }}" alt="" style="width: 3rem;" class="micon" id="micon">
        <span id="name" style="font-weight: bold;">Sign in</span>
    </div>
</header>







<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav  navbar-nav" style="text-align: center">
                <li class="active">
                    <!-- <i class="fa fa-home fa-2x"></i> -->
                    <img src="{{ asset('img/sand_icon.jpg') }}" alt="" style="width: 3.7rem;" class="micon">
                    <a href="#" style="margin-top: 0px;">Construction</a>
                </li>
                <li>
                    <!-- <i class="fa fa-industry fa-2x"></i> -->
                    <img src="{{ asset('img/industry_icon.jpg') }}" alt="" style="width: 4.5rem;" class="micon">
                    <a href="#" style="font-weight: lighter;">Industry</a>
                </li>
                <li>
                    <!-- <i class="fa fa-diamond fa-2x"></i> -->
                    <img src="{{ asset('img/precious_icon.jpg') }}" alt="" style="width: 2.8rem;" class="micon">
                    <a href="#" style="font-weight: lighter;">Precious</a>
                </li>

                <li>
                    <div class="header-search">
                        <form>
                            <input class="m-search" type="text" placeholder="Search here" style="">
                            <button type="submit" class="m-search-btn">
                                <i class="fa fa-search m-search-icon"></i>
                            </button>
                        </form>
                    </div>

                </li>

            </ul>
            <ul>
                <li>
                    <!-- Cart -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <!-- <i class="fa  fa-shopping-cart fa-2x"></i> -->
                            <img src="{{ asset('img/cart_icon.jpg') }}" alt="" style="width: 50px;" class="micon">
                            <!-- <span>Your Cart</span> -->
                            <!-- <div class="qty">3</div> -->
                        </a>
                        <div class="cart-dropdown">
                            <div class="cart-list">
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{ asset('img/download.jpeg') }}" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">sand</a></h3>
                                        <h4 class="product-price"><span class="qty">1x</span>UGX 120,000</h4>
                                    </div>
                                    <button class="delete"><i class="fa fa-close"></i></button>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="{{ asset('img/download.jpeg') }}" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">sand</a></h3>
                                        <h4 class="product-price"><span class="qty">3x</span>UGX 120,000</h4>
                                    </div>
                                    <button class="delete"><i class="fa fa-close"></i></button>
                                </div>
                            </div>
                            <div class="cart-summary">
                                <small>3 Item(s) selected</small>
                                <h5>SUBTOTAL: UGX 2940.00</h5>
                            </div>
                            <div class="cart-btns">
                                <a href="#">View Cart</a>
                                <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Cart -->
                </li>
                <ul>
                    <!-- /NAV -->
        </div>

        <!-- Menu Toogle -->
        <!-- <div class="menu-toggle" >
            <a href="#"  >
                <i class="fa fa-bars" style="color: black !important;"></i>
                <span>Menu</span>
            </a>
        </div> -->
        <!-- /Menu Toogle -->
    </div>
</nav>

</div>
<!-- /responsive-nav -->
</div>
<!-- /container -->
</nav>
<!-- /NAVIGATION -->

<style>
    .mhr {
        display: none;
    }

    .mobile {
        display: none;

    }

    .mobile-nav {
        display: none;
    }

    .mobile-user {
        display: none !important;
    }

    .mobile-search {
        display: none;
    }




    #responsive-nav {
        padding: 10px;
        display: flex;
        /* Allow elements to sit side-by-side */
        align-items: center;
        /* Vertically center content */
        justify-content: space-between;
        /* Distribute elements evenly */
    }

    #navigation {}

    .container {
        /*margin-bottom: -16.5px;*/
    }

    .header-search {
        position: relative;
        /* Needed for button positioning */
    }

    .m-search {
        width: 60rem !important;
        height: 5.3rem !important;
        display: block;
        /* Makes the input take full width */
        /* width: 100%; */
        /* Fills remaining space in parent */
        /* padding: 10px 10px; */
        /* Adjust padding as needed */
        border: 1px solid #ccc;
        border-radius: 30px;
        padding: 3%;
        margin-left: 2%;
      
        /* Add curved corners */
        /* height: 2rem; */
        /* Set input height */
    }

    .m-search-btn {
        position: absolute;
        /* Positions button inside input */
        top: 0;
       
        /* Adjust right padding for icon placement */
        bottom: 0;
        padding: 0;
        border: none;
        background-color: transparent;
        cursor: pointer;

    }

    .m-search-icon {
        /* fill: #ccc; */
        /* Change color as needed */
        width: 0 !important;
        position: relative;
        height: 14px;
        margin-right: 5px !important;
        color: black !important;
        padding: 15px !important;
        margin-bottom: 60px !important;
    }

    .header {
        display: flex;
        /* Arrange elements horizontally */
        justify-content: space-between;
        /* Distribute space evenly */
        align-items: center;
        /* Align vertically */
        padding: 5px 5px;
        background-color: white;

    }

    /* hr {
 margin: 0 10px;
  height: 20px;
  border: 1px solid #ddd;

} */

    .logo {
        width: 20rem;
        /* Adjust width as needed */
        height: auto;
        /* Maintain aspect ratio */
        margin-left: 12.2%;
        cursor: pointer;
    }


    @media screen and (max-width: 767px) {

        .section {
            border: 0 !important;
        }

        #navigation {
            display: none;
            border: 0 !important;
        }

        .mitems {
            justify-content: justify !important;

        }


        .items>li>a {
            padding: 2px 40px;


            color: grey;
        }









        #micon {
            display: none;
        }



        .m-search-icon {
            
           display: block;
           margin-right: 30px !important;
           padding-bottom: 25px !important;
           margin-bottom: 15px !important;

        }

        .m-search{

         width: 60rem !important;
        height: 5rem !important;
        display: flex;
        /* Makes the input take full width */
        /* width: 100%; */
        /* Fills remaining space in parent */
        /* padding: 10px 10px; */
        /* Adjust padding as needed */
        border: 1px solid #ccc;
        border-radius: 30px;
        margin: 1% 0%;
      
        /* Add curved corners */
        /* height: 2rem; */
        /* Set input height */
        }

        #name {
            display: none !important;
        }

        .user-info {
            display: none;
        }

        .items {
            display: flex !important;
            justify-content: space-between !important;

        }

        .mobile-nav {
            display: inline-block;
            justify-content: space-between;


            align-items: justify !important;
            padding-top: 10px !important;

            padding-bottom: 0px !important;

            margin: 10px;

        }

        .web {
            display: none;
        }




        .mobile {
            display: flex;
            border-bottom: 1px solid #ddd;

        }



        .mobile-user {
            display: flex !important;
        }

        .mobile-search {
            display: flex;
            width: 100% !important;
            justify-content: center;
            margin: 0 auto !important;
            padding: 10px;
        }





        .logo {
            display: none;
        }

        .m-search {
            margin-left: 0;
        }

        .header {

            margin: 0px 0px;
            padding-bottom: 0px !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: left;
        }

        .responsive-nav {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: left;
            padding: 0px 0px;
            margin: 0px 0px;
        }


    }

    .info-container,
    .user-info {
        display: flex;
        align-items: center;
        margin-right: 11.5%;
    }

    /* for smaller screens remove margin right on user info */
    @media screen and (max-width: 768px) {

        .info-container,
        .user-info {
            margin-right: 0;

        }


    }



    .info-container hr {
        border: 2px solid #ddd;
        margin: 0 10px;
        height: 55px;
    }

    .fa {
        font-size: 20px;
  
        margin-right: 5px;
    }

    .add-to-cart-btn {
        display: flex;
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
</style>



<!-- Path: index.php -->
<script>
    // Add this script to the bottom of the body tag
    // This script will toggle the class 'active' on the header element
    // when the user clicks on the user-info element
    document.querySelector('.user-info').addEventListener('click', function() {
        document.querySelector('.header').classList.toggle('active');
    });

    //logo routes to home page
    document.querySelector('.logo').addEventListener('click', function() {
        window.location.href = 'index.php';
    });
</script>
