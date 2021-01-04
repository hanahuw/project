<!DOCTYPE html>
<html>

<head>
    <title>Kitty Care Center</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/kittycare/home.png">

    <!--main file-->
    <link href="<?= base_url(); ?>/css/medical-guide.css" rel="stylesheet" type="text/css">

    <!--Medical Guide Icons-->
    <link href="<?= base_url(); ?>/fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">

    <!-- Default Color-->
    <link href="<?= base_url(); ?>/css/default-color2.css" rel="stylesheet" id="color" type="text/css">

    <!--bootstrap-->
    <link href="<?= base_url(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--Dropmenu-->
    <link href="<?= base_url(); ?>/css/dropmenu.css" rel="stylesheet" type="text/css">

    <!--Sticky Header-->
    <link href="<?= base_url(); ?>/css/sticky-header.css" rel="stylesheet" type="text/css">

    <!--revolution-->
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/settings.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/extralayers.css" rel="stylesheet" type="text/css">

    <!--Accordion-->
    <link href="<?= base_url(); ?>/css/accordion.css" rel="stylesheet" type="text/css">

    <!--tabs-->
    <link href="<?= base_url(); ?>/css/tabs.css" rel="stylesheet" type="text/css">

    <!--Owl Carousel-->
    <link href="<?= base_url(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
    <link rel="<?= base_url(); ?>/stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
    <link rel="<?= base_url(); ?>/stylesheet" type="text/css" href="css/demo.css" />

    <!--PreLoader-->
    <link href="<?= base_url(); ?>/css/loader.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrap">

        <!--Start PreLoader-->
        <div id="preloader">
            <div id="status">&nbsp;</div>
            <div class="loader">
                <h1>Nungguin yhaa ...</h1>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--End PreLoader-->

        <?= $this->include('layout/navbar'); ?>

        <br>

        <?= $this->renderSection('content'); ?>

        <?= $this->include('layout/footer'); ?>



        <a href="#0" class="cd-top"></a>
    </div>




    <script type="text/javascript" src="<?= base_url(); ?>/js/jquery.js"></script>

    <!-- SMOOTH SCROLL -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/scroll-desktop.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/js/scroll-desktop-smooth.js"></script>

    <!-- START REVOLUTION SLIDER -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/js/jquery.themepunch.tools.min.js"></script>


    <!-- Date Picker and input hover -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/classie.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/js/jquery-ui-1.10.3.custom.js"></script>

    <!-- Fun Facts Counter -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/counter.js"></script>


    <!-- Welcome Tabs -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/tabs.js"></script>


    <!-- All Carousel -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/owl.carousel.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/jquery.mmenu.min.all.js"></script>

    <!-- All Scripts -->
    <script type="text/javascript" src="<?= base_url(); ?>/js/custom.js"></script>
    <div id="mm-blocker" class="mm-slideout"></div>

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