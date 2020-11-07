<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
    <title>Care Aid - Welcome</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" media="screen" href="{{asset('front/js/bootstrap/bootstrap.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/js/mainmenu/menu.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/default.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/shortcodes.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('front/css/responsive-leyouts.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/js/masterslider/style/masterslider.css')}}" />
    <link rel='stylesheet' href="{{asset('front/js/masterslider/style/ms-staff-style.css')}}" type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/cubeportfolio/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('front/css/et-line-font/et-line-font.css')}}">
    <link href="{{asset('front/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/js/tabs/assets/css/responsive-tabs.css')}}" />
    <link rel="stylesheet" href="{{asset('front/js/ytplayer/ytplayer.css')}}" />



    <!-- Remove the below comments to use your color option -->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

</head>

<body>
<div class="site_wrapper">

    <!-- Header Start -->
@include('front.header')
<!-- Header End -->
@if(isset($slider))
    <!-- masterslider -->
@include('front.slider')
<!-- end of masterslider -->
@endif

    <div class="clearfix"></div>

    @yield('content')
    <!--end section-->
    <div class="clearfix"></div>

    <a href="#" class="scrollup custom"></a><!-- end scroll to top of the page-->

</div>
<!--end sitewraper-->


<!-- ========== Js files ========== -->

<script type="text/javascript" src="{{asset('front/js/universal/jquery.js')}}"></script>
<script src="{{asset('front/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('front/js/ytplayer/jquery.mb.YTPlayer.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/ytplayer/elementvideo-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/ytplayer/play-pause-btn.js')}}"></script>
<script src="{{asset('front/js/masterslider/jquery.easing.min.js')}}"></script>
<script src="{{asset('front/js/masterslider/masterslider.min.js')}}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1600,    // slider standard width
            height:650,   // slider standard height
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask"
        });

        var slider = new MasterSlider();
        slider.setup('masterslider2' , {
            loop:true,
            width:110,
            height:110,
            speed:20,
            view:'focus',
            preload:0,
            space:0,
            space:30,
            viewOptions:{centerSpace:1.6}
        });
        slider.control('arrows');
        slider.control('slideinfo',{insertTo:'#staff-info'});

    })(jQuery);
</script>
<script src="{{asset('front/js/mainmenu/customeUI.js')}}"></script>
<script src="{{asset('front/js/mainmenu/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/cubeportfolio/main.js')}}"></script>
<script src="{{asset('front/js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('front/js/owl-carousel/custom.js')}}"></script>
<script src="{{asset('front/js/tabs/assets/js/responsive-tabs.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('front/js/tabs/smk-accordion.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/tabs/custom.js')}}"></script>
<script src="{{asset('front/js/scrolltotop/totop.js')}}"></script>
<script src="{{asset('front/js/progress-circle/jquery.knob.js')}}"></script>
<script src="{{asset('front/js/progress-circle/custom.js')}}"></script>

<script src="{{asset('front/js/scripts/functions.js')}}" type="text/javascript"></script>
</body>
</html>
