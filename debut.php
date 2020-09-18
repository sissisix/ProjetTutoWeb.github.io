<?php
    $res = false;
    $v = "video/1_Debut_Bon.mp4";
    if (isset($_POST['form1'])) {
        $v = "video/2_Cours_Entree.mp4";
        $res = true;

        if (isset($_POST['ppe'])) {
            echo("ppe\n");
        }

        if (isset($_POST['pg'])) {
            echo("pg\n");
        }

        if (isset($_POST['epsm'])) {
            echo("epsm\n");
        }

        if (isset($_POST['vc'])) {
            echo("vc\n");
        }

        setcookie("resume[form]", "form1_1");
    }
?>

<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('nonCheck').checked) {
            document.getElementById('ifNo').style.display = 'block';
            document.getElementById('next').style.display = 'none';
            document.getElementById('form').style.display = 'block';
        } else {
            document.getElementById('ifNo').style.display = 'none';
            document.getElementById('next').style.display = 'block';
            document.getElementById('form').style.display = 'none';
        }
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
<body id="home_page" class="home_page">

<!-- about section -->
<section class="layout_padding section about_dottat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about_img margin_top_30  text_align_center">
                    <video controls autoplay style="display: block; width: 100%; margin: 0 auto;"><source src="<?=$v?>" type="video/mp4"></video>
                </div>
            </div>
            <?php if(!$res): ?>
                <div style="margin: 0 auto;">
                    <label for="ouiCheck" style="color: #0e24cb; font-size: 25px; margin-right: 25px; ">Oui </label>
                    <input class="blue_bt2" type="radio" id="ouiCheck" name="yesno" onclick="yesnoCheck();">

                    <label for="nonCheck" style="color: #0e24cb; font-size: 25px"> Non </label>
                    <input class="blue_bt2" type="radio" id="nonCheck" name="yesno" onclick="yesnoCheck();">
                </div>
                <div>
                    <a class="blue_bt" href="cours1.php" id="next" style="display: none">Suivante</a>
                </div>
            <?php else: ?>
                <a class="blue_bt" href="resume.php">Suivant</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- section -->
<section class="layout_padding section" id="ifNo" style="display: none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 cours_timging_bg">
                <div class="container">
                    <div class="time_table">
                        <form action="debut.php" method="post" style="margin-top: 50px" id="form" style="display: none">
                            <p><input type="checkbox" name="ppe"/> Prendre la porte d'entrée</p>
                            <p><input type="checkbox" name="pg"/> Prendre du gel</p>
                            <p><input type="checkbox" name="epsm"/> Enfoncer la porte sans les mains</p>
                            <p><input type="checkbox" name="vc"/> Venir avec des vêtements plus couvrants</p>
                            <input class="blue_bt" type="submit" name="form1" value=" Valider "/>
                        </form>
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
