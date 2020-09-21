<?php
    $score = 0;

    if(isset($_COOKIE['resume']['form1_1'])) {
        $score += 40;
    }

    if(isset($_COOKIE['resume']['form1_2'])) {
        $score += 170;
    }

    if(isset($_COOKIE['resume']['form3_1'])) {
        $score += 170;
    }

    if(isset($_COOKIE['resume']['form3_2'])) {
        $score += 170;
    }

    if(isset($_COOKIE['resume']['form4_1'])) {
        $score += 90;
    }

    if(isset($_COOKIE['resume']['form4_2'])) {
        $score += 90;
    }

    if(isset($_COOKIE['resume']['form5_1'])) {
        $score += 90;
    }

    if(isset($_COOKIE['resume']['form5_3'])) {
        $score += 90;
    }

    if(isset($_COOKIE['resume']['form6_1'])) {
        $score += 90;
    }
?>

<!DOCTYPE html>
<html lang="fr">

<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <title>Covid-19</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">
    <!-- light box gallery -->
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body id="home_page" class="home_page" style="background: #043438">

<!-- section -->
<section class="layout_padding section" style="padding-top: 0px; padding-bottom: 0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                <div class="container">
                    <div class="time_table">
                        <h1>Merci d'avoir participé !</h1>
                        <h3>Votre score est de : <?= $score ?> / 1000</h3><br />
                        <p>800 - 1000 points : Elève type, l'espoir renaît</p>
                        <p>600 - 799 points : Dans une bonne moyenne, mais imparfait</p>
                        <p>400 - 599 points : Beaucoup de "laisser aller", il faut renforcer les mesures</p>
                        <p>0 - 399 points : Ne vous étonnez pas si on disparait d'içi 2 ans</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<div class="cpy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright 2019. All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->
<!-- Core JavaScript
   ================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/animate.js"></script>
<script src="js/ekko-lightbox.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

