<!DOCTYPE html>
<html lang="en">
<head>
    <title>Casa Alfarroba</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel='stylesheet' type='text/css'>

    <!-- Styles for this template -->
    <link href="./assets/css/style.css" rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
<div id="home"></div>
<div class="top-menu">
    <div class="container">
        <!-- Fixed navbar -->
        <div class="navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand"><img src="assets/images/logo-white.png" alt="Casa Alfarroba"
                                                          title="Casa Alfarroba"/></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#leisure">Leisure</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="title">
        <h1>Casa Alfarroba</h1>
        <p>Beautiful country villa set on a hectare of land in the Eastern Algarve</p>
    </div>
</header>

<?php include("./sections/about.inc"); ?>

<?php include("./sections/amenities.inc"); ?>

<?php include("./sections/gallery.inc"); ?>

<?php include("./sections/leisure.inc"); ?>

<?php include("./sections/contact.inc"); ?>

<div class="footer">
    <div class="container">
        <div class="row">
            <span>Copyright © <?php echo date("Y"); ?> <a
                        href="#home">Casa Alfarroba</a></span>
            <span><a href="#home"><i class="fas fa-arrow-circle-up"></i></a></span>
        </div>
    </div>
</div>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/stickUp.min.js" type="text/javascript"></script>
<script src="js/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

</body>
</html>
