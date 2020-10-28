
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3DGB93YQNL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3DGB93YQNL');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153181687-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153181687-1');
    </script>


    <title>РФ ПГУ  &mdash; В НОГУ СО ВРЕМЕНЕМ </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        #street-view {
            height: 100%;
        }
    </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Загрузка...</span>
    </div>
</div>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">

                    </div>
                    <div class="col-6">
                        <div class="d-flex ml-auto">
                            <a href="#" class="d-flex align-items-center ml-auto mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">rfpgu@idknet.com</span>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+373 (555) 2 09 03</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="{{ url('/') }}">
                                РФ ПГУ
                            </a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li>
                                        <a href="#home-section" class="nav-link">Главная</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/front.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5"id="home-section">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-md-12">
                    <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=4_xX4DVEE8U&list=PLnXfUcxmBIZZ4LBqkqowTFAfACr0-ybCC" class="play-button d-block">
                        <span class="icon-play"></span>
                    </a>
                    <blink>
                    <h1 class="text-uppercase"   style="color:red">Поступайте в Рыбницкий филиал ПГУ им.Т.Г.Шевченко в 2021 году</h1>
                    </blink>
                </div>
            </div>
        </div>
    </div>



</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>




<script>
    var showSectionInfo=0;
    var showSectionAboutIfno=0;
    var showSectionStudIfno=0;
    var showSectionPop=0;
    var showSectionProject=0;
    var showSectionMap=0;
    $(window).scroll(function(){
        let showSectionInfo;
        let top = $(this).scrollTop()+300;
        var posInfSect = $("#info-section").offset();
        var smalinfo_section = $("#smalinfo-section").offset();
        var stud_section= $("#stud-section").offset();
        if( (posInfSect['top']<top)&&(window.showSectionInfo==0)){
            window.showSectionInfo=1;
            $.get( "/section/1", function( data ) {
                //console.log(data);
                $( "#info-section" ).html( data );
            });
        }
        if( (smalinfo_section['top']<top)&&(window.showSectionAboutIfno==0)){
            window.showSectionAboutIfno=1;
            $.get( "/section/2", function( data ) {
                //console.log(data);
                $( "#smalinfo-section" ).html( data );
            });
        }

        if( (stud_section['top']<top)&&(window.showSectionStudIfno==0)){
            window.showSectionStudIfno=1;
            $.get( "/section/3", function( data ) {
                //console.log(data);
                $( "#stud-section" ).html( data );
            });
        }


        var sps_section= $("#sps-section").offset();
        if( (sps_section['top']<top)&&(window.showSectionPop==0)){
            window.showSectionPop=1;
            $.get( "/section/4", function( data ) {
                //console.log(data);
                $( "#sps-section" ).html( data );
            });
        }

        var projects_section= $("#projects-section").offset();
        if( (projects_section['top']<top)&&(window.showSectionProject==0)){
            window.showSectionProject=1;
            $.get( "/section/5", function( data ) {
                //console.log(data);
                $( "#projects-section" ).html( data );
            });
        }

        var projects_section= $("#projects_map").offset();
        if( (projects_section['top']<top)&&(window.showSectionMap==0)){
            window.showSectionMap=1;
            $.get( "/section/6", function( data ) {
                //console.log(data);
                $( "#projects_map" ).html( data );
            });
        }
       /* console.log(posInfSect);
        console.log(top);
        console.log(window.showSectionInfo);
        */
    });
</script>




</body>
</html>
