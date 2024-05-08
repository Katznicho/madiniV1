<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <a href="#home" class="mhome" id="#mhome"><img src = "img/Madini Logo img.png"
                                style="align-items: center; padding: 10px; width: 15rem;" id="#mhome"></a>
                        <h6
                            style="text-align: center !important; margin-bottom: 30px !important; align-items: center !important; justify-content: center !important; color: white;">
                            Madini, A digital mineral market place </h6>

                        {{-- <p>Madini a digital online market place where Artisanal and Small-Scale miners can
                            showcase their products
                            </p>> --}}

                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        {{-- <h3 class="footer-title">CONTACT US</h3> --}}
                        <ul class="footer-links">
                            <ul class="footer-links">
                                {{-- <li><a href="#"><i class="fa fa-map-marker" style="color: white;"></i>Hamlet Hub,
                                        Mimosa Courts, Uganda Kampala.</a></li>
                                <li><a href="#"><i class="fa fa-phone" style="color: white;"></i>+256 393 100
                                        200</a></li> --}}
                                <li><a href="#"><i class="fa fa-envelope-o"
                                            style="color: white;"></i>&nbsp;connect@madinigroup.com</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        {{-- <h3 class="footer-title">Information</h3> --}}
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            {{-- <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Terms & Conditions</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        {{-- <h3 class="footer-title">Service</h3> --}}
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            {{-- <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>




</footer>
<!-- /FOOTER -->

<style>
    .footer-links {
        color: white;
    }

    i {
        color: white;
    }



    .bar {

        display: none;


    }

    #home {
        display: none !important;
    }

    #mhome {
        display: none !important;
    }

    .bar a {
        display: none;
    }

    .mhome {
        display: none;
    }

    /* Media query for smaller screens */
    @media screen and (max-width: 768px) {
        .bar {
            display: flex;
            /* Hide the bottom navigation bar on larger screens */
            position: fixed !important;
            bottom: 0;
            width: 100% !important;
            background-color: white;
            border-top: 1px solid #ccc;

            justify-content: space-around;
            align-items: center;
            padding: 0 !important;
            box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.1);
            color: black !important;
            text-decoration: none;
            margin: 0;
        }

        .aboutus {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mhome {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        #home {
            display: flex;

        }

        .bar a {
            display: flex;
        }

        .footer-links>li.fa {

            font-size: 20px;
            color: white !important;

            margin-right: 5px;
        }

        .footer {
            {{-- justify-content: center;
            align-items: center;
            text-align: center;
    } --}}
        }
</style>


<script>
    // Function to check if the user has scrolled to 90% of the page height
    function checkScroll() {
        const scrollPosition = window.scrollY || window.pageYOffset;
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const documentHeight = document.body.clientHeight;

        if (scrollPosition > 0.6 * (documentHeight - windowHeight)) {
            document.querySelector('.bar').style.display = 'flex';
        } else {
            document.querySelector('.bar').style.display = 'none';
        }
    }

    // Add event listener for scrolling
    window.addEventListener('scroll', checkScroll);
</script>
