<header class="header" style="display: flex;">


    <img src="./img/logo.jpg" alt="Logo" class="logo">
    <div class="info-container header-links pull-right" style="">
        <!-- <i class="fa fa-map-marker"></i> -->
        <img src="./img/delivery_icon.jpg" alt="" style="width: 2rem;" class="micon">
        <!-- <p>Delivery</p> -->
        <div class="header-links pull-middle">

            <p style="font-weight: 200;">Delivery</p>

            <span style="font-weight: bold;">Muyenga</span>
        </div>
        <hr>
        <!-- <i class="fa fa-money"></i> -->
        <img src="./img/ASM_icon.jpg" alt="" style="width: 3rem;" class="micon">
        <div>
            <p style="font-weight: 200;">ASM Impact</p>
            <span style="font-weight: bold;">1.2 million ASM</span>
        </div>
    </div>
    <div class="user-info">
        <!-- <i class="fa fa-user"></i> -->
        <img src="./img/user_icon.jpg" alt="" style="width: 4rem;" class="micon">
        <span>Bert</span>
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
                    <img src="./img/sand_icon.jpg" alt="" style="width: 3.7rem;" class="micon">
                    <a href="#" style="margin-top: 0px;">Construction</a>
                </li>
                <li>
                    <!-- <i class="fa fa-industry fa-2x"></i> -->
                    <img src="./img/industry_icon.jpg" alt="" style="width: 4.5rem;" class="micon">
                    <a href="#" style="font-weight: lighter;">Industry</a>
                </li>
                <li>
                    <!-- <i class="fa fa-diamond fa-2x"></i> -->
                    <img src="./img/precious_icon.jpg" alt="" style="width: 2.8rem;" class="micon">
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
                            <img src="./img/cart_icon.jpg" alt="" style="width: 50px;" class="micon">
                            <!-- <span>Your Cart</span> -->
                            <!-- <div class="qty">3</div> -->
                        </a>
                        <div class="cart-dropdown">
                            <div class="cart-list">
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/download.jpeg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price"><span class="qty">1x</span>UGX 120,000</h4>
                                    </div>
                                    <button class="delete"><i class="fa fa-close"></i></button>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/download.jpeg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
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
#responsive-nav {
    padding: 10px;
    display: flex;
    /* Allow elements to sit side-by-side */
    align-items: center;
    /* Vertically center content */
    justify-content: space-between;
    /* Distribute elements evenly */
}

#navigation{
    
}

.container {
    /*margin-bottom: -16.5px;*/
}

.header-search {
    position: relative;
    /* Needed for button positioning */
}

.m-search {
    width: 60rem !important;
    height: 5rem !important;
    display: block;
    /* Makes the input take full width */
    /* width: 100%; */
    /* Fills remaining space in parent */
    /* padding: 10px 10px; */
    /* Adjust padding as needed */
    border: 1px solid #ccc;
    border-radius: 30px;
    margin-left: 8%;
    /* Add curved corners */
    /* height: 2rem; */
    /* Set input height */
}

.m-search-btn {
    position: absolute;
    /* Positions button inside input */
    top: 0;
    right: 3px;
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
    margin-right: 0 !important;
    color: black;
}

.header {
    display: flex;
    /* Arrange elements horizontally */
    justify-content: space-between;
    /* Distribute space evenly */
    align-items: center;
    /* Align vertically */
    padding: 20px 50px;
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
    margin-left: 10%;
}


@media screen and (max-width: 767px) {

    .header {
        padding: 10px 10px;
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

    .logo {
        width: 5rem;
        height: auto;
        margin-right: 5rem;
        margin-left: 0px !important;
        padding-left: 0px !important;
    }
}

.info-container,
.user-info {
    display: flex;
    align-items: center;
    margin-right: 12rem;
}

/* for smaller screens remove margin right on user info */
@media screen and (max-width: 768px) {

    .info-container,
    .user-info {
        margin-right: 0;
    }
}

.info-container hr {
    border: 1px solid #ddd;
    margin: 0 10px;
    height: 20px;
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