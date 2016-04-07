
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

<div class="contact-page container-fluid page">
    <div class="row">
        <!--( a ) Contact Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>contact</h1>
            </div>
        </div>

        <!--( b ) Contact Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Contact Form -->

            <div class="clearfix full-height">
                <h2 class="small-heading">COME IN TOUCH</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="data">
                                        <i class="fa fa-map-marker"></i>
                                            <span>
                                                House -3, Road-2, Block - F, <br>
                                                 Akhalia Ghat R/A, Sylhet. <br>
                                            </span>
                                    </div>

                                    <div class="data">
                                        <i class="fa fa-envelope"></i>
                                            <span>
                                                hello@boots4.com
                                            </span>
                                    </div>

                                    <div class="data">
                                        <i class="fa fa-phone"></i>
                                            <span>
                                                +880 12345 - 67890
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="map-canvas"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <form  id="contactForm" class="contact-form" method="post" action="php/contact-form.php">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea name="massage" type="text" class="form-control" id="message" rows="5" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    <input type="submit" id="cfsubmit" class="btn btn-send" value="Say Hello">
                                </div>
                                <div id="contactFormResponse" class="col-md-8 col-xs-12"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ( D ) Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="copyright">Copyright &copy; 2015
                                    <a href="#">Your Company</a>
                                </p>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="author">
                                    Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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