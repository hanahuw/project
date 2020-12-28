<!DOCTYPE html>
<html>

<head>
    <title>Kitty Care Center</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" type="image/png" href="images/kittycare/home.png">

    <!--main file-->
    <link href="css/medical-guide.css" rel="stylesheet" type="text/css">

    <!--Medical Guide Icons-->
    <link href="fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">

    <!-- Default Color-->
    <link href="css/default-color2.css" rel="stylesheet" id="color" type="text/css">

    <!--bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--Dropmenu-->
    <link href="css/dropmenu.css" rel="stylesheet" type="text/css">

    <!--Sticky Header-->
    <link href="css/sticky-header.css" rel="stylesheet" type="text/css">

    <!--revolution-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/settings.css" rel="stylesheet" type="text/css">
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">

    <!--Accordion-->
    <link href="css/accordion.css" rel="stylesheet" type="text/css">

    <!--tabs-->
    <link href="css/tabs.css" rel="stylesheet" type="text/css">

    <!--Owl Carousel-->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />

    <!--PreLoader-->
    <link href="css/loader.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrap">

        <!--Start PreLoader-->
        <div id="preloader">
            <div id="status">&nbsp;</div>
            <div class="loader">
                <h1>Loading...</h1>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--End PreLoader-->


        <!--Start Header-->

        <div id="header-2">

            <header class="header header2">
                <div class="container">


                    <div class="row">

                        <div class="col-md-3">
                            <a href="/" class="logo"><img src="images/kittycare/home5.png"></a>

                        </div>


                        <div class="col-md-9">


                            <nav class="menu-2">
                                <ul class="nav wtf-menu">
                                    <li class="parent"><a href="#.">Adopsi</a>
                                        <ul class="submenu">
                                            <li> <a href="index.html">Mau Adopsi</a> </li>
                                            <li> <a href="index2.html">Cari pengadopsi</a> </li>
                                        </ul>
                                    </li>

                                    <li class="parent"><a href="#.">Meows-up</a>
                                    </li>

                                    <li class="parent"><a href="#.">Interme-ow</a>
                                        <ul class="submenu">
                                            <li> <a href="services.html">Artikel</a> </li>
                                            <li> <a href="services2.html">Tutorial</a> </li>
                                            <li> <a href="appointment.html">Tips&trick</a> </li>
                                        </ul>
                                    </li>

                                    <li><a href="procedures.html">Donasi</a></li>

                                    <li class="parent"><a href="#.">Petcare</a>

                                        <ul class="submenu">

                                            <li class="parent"> <a href="#">Pet shop</a> <i
                                                    class="icon-chevron-small-right"></i>
                                                <ul class="submenu">
                                                    <li> <a href="gallery-simple-two.html">Jakarta Pusat</a> </li>
                                                    <li> <a href="gallery-simple-three.html">Jakarta Timur</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Barat</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Utara</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Selatan</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Bekasi</a> </li>
                                                </ul>
                                            </li>

                                            <li class="parent"> <a href="#">Pet klinik</a> <i
                                                    class="icon-chevron-small-right"></i>
                                                <ul class="submenu">
                                                    <li> <a href="gallery-simple-two.html">Jakarta Pusat</a> </li>
                                                    <li> <a href="gallery-simple-three.html">Jakarta Timur</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Barat</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Utara</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Jakarta Selatan</a> </li>
                                                    <li> <a href="gallery-simple-four.html">Bekasi</a> </li>
                                                </ul>
                                            </li>

                                        </ul>

                                    </li>

                                    <li class="parent"><a href="#.">Contact Us</a>
                                    </li>

                                    <li class="parent"><a href="#."><i class="icon-user"></i></a>
                                        <ul class="submenu">
                                            <li> <a href="index.html">Daftar</a> </li>
                                            <li> <a href="index2.html">Masuk</a> </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>

                        </div>

                    </div>


                </div>
            </header>
        </div>

        <!--End Header-->

        <br>

        <?= $this->renderSection('content'); ?>

        <!--Start Footer-->
        <footer class="footer" id="footer">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="emergency">
                            <i class="icon-phone5"></i>
                            <span class="text">For emergency cases</span>
                            <span class="number">1-300-400-8211</span>
                            <img src="images/emergency-divider.png" alt="">
                        </div>
                    </div>
                </div> -->


            <div class="main-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">

                            <div class="useful-links">
                                <div class="title">
                                    <h5>Layanan Kitty Care</h5>
                                </div>

                                <div class="detail">
                                    <ul>

                                        <li><a href="#.">Mau adopsi</a></li>
                                        <li><a href="#.">Cari pengadopsi</a></li>
                                        <li><a href="#.">Meows-up</a></li>
                                        <li><a href="#.">Artikel</a></li>
                                        <li><a href="#.">Tutorial</a></li>
                                        <li><a href="#.">Tips&trick</a></li>
                                        <li><a href="#.">Donasi</a></li>
                                        <li><a href="#.">Pet shop</a></li>
                                        <li><a href="#.">Pet klinik</a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                        <!-- <div class="col-md-3">


                        <div class="title">
                            <h5>LATEST TWEETS</h5>
                        </div>

                        <div class="detail">

                            <div class="tweets">

                                <div class="icon">
                                    <i class="icon-yen"></i>
                                </div>

                                <div class="text">
                                    <p><a href="#.">@Rotography</a> Please kindly use Support Forum: <a href="#.">Medical.co.uk</a></p>
                                    <span>3 days ago</span>
                                </div>

                            </div>

                            <div class="tweets">

                                <div class="icon">
                                    <i class="icon-yen"></i>
                                </div>

                                <div class="text">
                                    <p>A quick launcher for WordPress dashboard <a href="#.">@Medical</a></p>
                                    <span>about a week ago</span>
                                </div>

                            </div>

                        </div>



                    </div> -->
                        <div class="col-md-4">

                            <div class="newsletter">
                                <div class="title">
                                    <h5>Kritik dan Saran</h5>
                                </div>

                                <div class="detail">

                                    <div class="signup-text">
                                        <i class="icon-dollar"></i>
                                        <span>Masuk dengan akun Anda untuk memberikan kritik dan saran.</span>
                                    </div>

                                    <div class="form">
                                        <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                        <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                                        <form name="subscribe_form" id="subscribe_form" method="post" action="#"
                                            onSubmit="return false">
                                            <input type="text" data-delay="300" placeholder="Email Anda"
                                                name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();"
                                                class="input">
                                            <input type="text" data-delay="300" placeholder="Password"
                                                name="subscribe_password" id="subscribe_password"
                                                onKeyPress="removeChecks();" class="input">
                                            <input name="Kirim" type="submit" value="Kirim"
                                                onClick="validateSubscription();">
                                        </form>
                                    </div>

                                </div>


                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="get-touch">
                                <div class="title">
                                    <h5>Ikuti kami di media sosial</h5>
                                </div>

                                <div class="detail">
                                    <div class="get-touch">


                                        <span class="text">Dapatkan info update dari kami lebih mudah melalui media
                                            sosial</span>


                                        <ul>
                                            <!-- <li><i class="icon-location"></i> <span>Medical Ltd, Manhattan 1258, New York, USA Lahore</span></li> -->
                                            <li><i class="icon-phone4"></i> <span>(+62) 85156854316</span></li>
                                            <li><a href="#."><i class="icon-dollar"></i>
                                                    <span>kittycare.center3@gmail.com</span></a></li>
                                            <li><a href="https://www.instagram.com/kittycare_center/"><i
                                                        class="icon-euro"></i><span>Kitty Care Center</span></a></li>
                                            <li><a href="https://www.instagram.com/kittycare_center/"><i
                                                        class="icon-instagram"></i><span>kittycare_center</span></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <!-- <span class="copyrights">
                <p class="text-center" style="color: #fff;">Copyright &copy; 2020 Kitty Care Center.
                    <br>Developed with love by Hana Huwaida, Windu Wulandari, Adelia Melanie Putri
                    <br>Special Thanks to Vienda Miccela Seldry
                </p>
            </span> -->
            <div class="row justify-content-center">

                <!-- <div class="col-md-12"> -->
                <span class="copyrights">
                    <figure class="text-center">
                        Copyright &copy; 2020 Kitty Care Center.
                        <br>Developed with love by Hana Huwaida, Windu Wulandari, Adelia Melanie Putri.
                        <br>Special thanks to Vienda Miccela
                    </figure>
                </span>
            </div>

            <!-- <div class="col-md-2">
                    <div class="social-icons">
                        <a href="#." class="fb"><i class="icon-euro"></i></a>
                        <a href="#." class="tw"><i class="icon-yen"></i></a>
                    </div>
                </div> -->

        </div>
    </div>

    </div>

    </footer>
    <!--End Footer-->



    <a href="#0" class="cd-top"></a>
    </div>




    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- SMOOTH SCROLL -->
    <script type="text/javascript" src="js/scroll-desktop.js"></script>
    <script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

    <!-- START REVOLUTION SLIDER -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>


    <!-- Date Picker and input hover -->
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>

    <!-- Fun Facts Counter -->
    <script type="text/javascript" src="js/counter.js"></script>


    <!-- Welcome Tabs -->
    <script type="text/javascript" src="js/tabs.js"></script>


    <!-- All Carousel -->
    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

    <!-- All Scripts -->
    <script type="text/javascript" src="js/custom.js"></script>


    <!-- Revolution Slider -->
    <script type="text/javascript">
    jQuery('.tp-banner').show().revolution({
        dottedOverlay: "none",
        delay: 16000,
        startwidth: 1170,
        startheight: 720,
        hideThumbs: 200,

        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 5,

        navigationType: "nexttobullets",
        navigationArrows: "solo",
        navigationStyle: "preview",

        touchenabled: "on",
        onHoverStop: "on",

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

        keyboardNavigation: "off",

        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: "on",
        fullScreen: "off",

        spinner: "spinner4",

        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: "off",

        autoHeight: "off",
        forceFullWidth: "off",



        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        videoJsPath: "rs-plugin/videojs/",
        fullScreenOffsetContainer: ""
    });
    </script>


</body>

</html>