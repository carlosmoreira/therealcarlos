
<!doctype html>

<html lang="en" class="no-js">

<head>

    <!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- title and favicon -->

    <title>Boots4 :: Portfolio Template</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/fav_icon.gif">


    <!--necessary stylesheets -->

    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/popup.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .introduction , .menu{
            width: 50%;
            height: 100%;
        }
    </style>
</head>


<body ng-app="therealcarlos">

<!-- Preloader -->

<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- home-page -->

<ng-view></ng-view>


<!--
4 ) Close Button
-->

<div class="close-btn"></div>


<!--
7 ) Service Page
-->


<!--
8 ) Contact Page
-->
g
<!--
9 ) Javascript
- -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/angularjs/angular.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/angularjs/angular-route.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script>
    app.constant('BaseUrl' , '<?php echo get_template_directory_uri(); ?>');
</script>
</body>
</html>