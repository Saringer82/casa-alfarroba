<!DOCTYPE html>
<html lang="en">
<head>
    <title>Casa Alfarroba</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <!-- Styles for this template -->
    <link href="./assets/css/style.css" rel='stylesheet' type='text/css'>
    <link href="./assets/css/aos.css" rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--Gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
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
                <a href="#home" class="navbar-brand sliding-link"><img src="assets/images/logo-white.png" alt="Casa Alfarroba"
                                                          title="Casa Alfarroba"/></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="sliding-link" href="#about">About</a></li>
                    <li><a class="sliding-link" href="#amenities">Amenities</a></li>
                    <li><a class="sliding-link" href="#gallery">Gallery</a></li>
                    <li><a class="sliding-link" href="#leisure">Leisure</a></li>
                    <li><a class="sliding-link" href="#contact">Contact</a></li>
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
    <div class="section">
        <div class="container">
            <div class="row">
            <span>Copyright © <?php echo date("Y"); ?> <a
                        href="#home">Casa Alfarroba</a></span>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
</div>

<script src="js/aos.js"></script>

<!--<script src="js/jquery.min.js" type="text/javascript"></script>-->
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
    baguetteBox.run('.tz-gallery');

    //Initialize AOS
    AOS.init({
        easing: 'ease-in-out-sine',
        // Global settings:
        disable: 'mobile'
    });

    $(".sliding-link").click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
    });

</script>
</body>
</html>
