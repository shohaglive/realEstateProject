<?php
include_once 'control/control.php';
$control = new control();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Real Estate</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
    <link href="css/carousel.css" type="text/css" rel="stylesheet" media="all"><!-- carousel css -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Estate Group Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
    <!-- requried-jsfiles-for owl -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText :  true,
                pagination : false
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
</head>
<body>
<!-- header -->
<header>
    <div class="container">
        <!-- nav -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <h1><a href="index.html">REAL ESTATE</a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="properties.php">Properties</a></li>
                        <li><a href="charges.php">Monthly Charges</a></li>
                        <li><a href="photo.php">Photos</a></li>
                        <li><a href="about.php">About</a></li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Short Codes</a></li>
                                <li><a href="icons.html">Icons Page</a></li>
                            </ul>
                        </li> -->
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <script src="js/nav.js"></script><!-- nav-js -->
        <!-- //nav -->
    </div>
</header>
<!-- //header -->
