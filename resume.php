<?php
    if(isset($_COOKIE['resume']['form'])){
        $seq = $_COOKIE['resume']['form'];

        $dest = "index.html";

        if($seq == "form1") {
            $dest = "sequence2.php";
        }

        if($seq == "form2") {
            $dest = "sequence3.php";
        }

        if($seq == "form3") {
            $dest = "sequence4.php";
        }

        if($seq == "form4") {
            $dest = "sequence5.php";
        }

        if($seq == "form5") {
            $dest = "sequence6.php";
        }

        if($seq == "form6") {
            $dest = "end.php";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

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
<?php if($seq == "form1"): ?>

    <?php if(isset($_COOKIE['resume']['form1_1'])): ?>
        <p style="color: greenyellow;">Il n’aurait pas dû passer par un passage interdit et respecter le sens de circulation</p>
    <?php else: ?>
        <p style="color: red;">Il n’aurait pas dû passer par un passage interdit et respecter le sens de circulation</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form1_2'])): ?>
        <p style="color: greenyellow;">Être en retard ne justifie pas de ne pas se laver les mains avec le gel hydroalcoolique</p>
    <?php else: ?>
        <p style="color: red;">Être en retard ne justifie pas de ne pas se laver les mains avec le gel hydroalcoolique</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form1_3'])): ?>
        <p style="color: red;">Ouvrir les portes avec les coudes suffit, il n’y a pas besoin d’enfoncer la porte !</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form1_4'])): ?>
        <p style="color: red;">Se couvrir le corps n’est pas utile, le virus ne se transmet pas par la peau</p>
    <?php endif; ?>

<?php elseif ($seq == "form2"): ?>

    <?php if(isset($_COOKIE['resume']['form2_1'])): ?>
        <p style="color: red;">Travailler en groupes n’est pas forcément un problème si c’est fait dans le respect des règles</p>
    <?php else: ?>
        <p style="color: greenyellow;">Travailler en groupes n’est pas forcément un problème si c’est fait dans le respect des règles</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form2_2'])): ?>
        <p style="color: red">Il n’y a pas nécessité d'éternuer dans son coude quand on a un masque</p>
    <?php else: ?>
        <p style="color: greenyellow">Il n’y a pas nécessité d'éternuer dans son coude quand on a un masque</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form2_3'])): ?>
        <p style="color: red">Les gants sont inutiles et peuvent donner un sentiment de fausse sécurité ils sont donc à éviter</p>
    <?php else: ?>
        <p style="color: greenyellow">Les gants sont inutiles et peuvent donner un sentiment de fausse sécurité ils sont donc à éviter</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form2_4'])): ?>
        <p style="color: red">Boire est autorisé si c’est fait en respectant les règles (le décrocher d’un côté en ne touchant que l’élastique, le laisser pendre pendant qu’on boit, puis le re positionner délicatement)</p>
    <?php else: ?>
        <p style="color: greenyellow">Boire est autorisé si c’est fait en respectant les règles (le décrocher d’un côté en ne touchant que l’élastique, le laisser pendre pendant qu’on boit, puis le re positionner délicatement)</p>
    <?php endif; ?>

<?php elseif ($seq == "form3"): ?>

    <?php if(isset($_COOKIE['resume']['form3_1'])): ?>
        <p style="color: greenyellow">Il est important de se laver régulièrement les mains en particulier avant de manger</p>
    <?php else: ?>
        <p style="color: red">Il est important de se laver régulièrement les mains en particulier avant de manger</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form3_2'])): ?>
        <p style="color: greenyellow">La distanciation sociale reste un des moyens les plus efficace pour lutter contre la Covid-19</p>
    <?php else: ?>
        <p style="color: red">La distanciation sociale reste un des moyens les plus efficace pour lutter contre la Covid-19</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form3_3'])): ?>
        <p style="color: red">Les services de restauration sont toujours utilisable sans risque si on prend toutes les précautions nécessaires</p>
    <?php else: ?>
        <p style="color: greenyellow">Les services de restauration sont toujours utilisable sans risque si on prend toutes les précautions nécessaires</p>
    <?php endif; ?>

<?php elseif ($seq == "form4"): ?>

    <?php if(isset($_COOKIE['resume']['form4_1'])): ?>
        <p style="color: greenyellow">Quand on ne porte pas de masque il est primordial de tousser et d'éternuer dans son coude</p>
    <?php else: ?>
        <p style="color: red">Quand on ne porte pas de masque il est primordial de tousser et d'éternuer dans son coude</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form4_2'])): ?>
        <p style="color: greenyellow">Il ne faut pas partager sa nourriture pour éviter la propagation</p>
    <?php else: ?>
        <p style="color: red">Il ne faut pas partager sa nourriture pour éviter la propagation</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form4_3'])): ?>
        <p style="color: red">Sous aucune condition on ne rend un plat entamé, et encore plus en cette période</p>
    <?php else: ?>
        <p style="color: greenyellow">Sous aucune condition on ne rend un plat entamé, et encore plus en cette période</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form4_4'])): ?>
        <p style="color:red;">Manger avec un masque n’est pas adapté et vous risquez plus de l'endommager</p>
    <?php else: ?>
        <p style="color:greenyellow;">Manger avec un masque n’est pas adapté et vous risquez plus de l'endommager</p>
    <?php endif; ?>

<?php elseif ($seq == "form5"): ?>

    <?php if(isset($_COOKIE['resume']['form5_1'])): ?>
        <p style="color: greenyellow">Le port du masque est obligatoire dans l’ensemble de l’Université </p>
    <?php else: ?>
        <p style="color: red">Le port du masque est obligatoire dans l’ensemble de l’Université </p>
    <?php endif; ?>
    <?php if(!isset($_COOKIE['resume']['form5_2']) && !isset($_COOKIE['resume']['form5_3']) && !isset($_COOKIE['resume']['form5_4'])): ?>
        <p style="color: greenyellow">Si on ressent que le masque nous dérange le mieux et de l’enlever une fois sortit de l’université. Retourner son masque ou respirez dans son T-shirt ne sont pas des bonnes pratiques</p>
    <?php else: ?>
        <p style="color: red">Si on ressent que le masque nous dérange le mieux et de l’enlever une fois sortit de l’université. Retourner son masque ou respirez dans son T-shirt ne sont pas des bonnes pratiques</p>
    <?php endif; ?>

<?php elseif ($seq == "form6"): ?>

    <?php if(isset($_COOKIE['resume']['form6_1'])): ?>
        <p style="color: greenyellow">Il faut éviter les contacts physique et donc les serrages de mains et privilégier les salutations à distance</p>
    <?php else: ?>
        <p style="color: red">Il faut éviter les contacts physique et donc les serrages de mains et privilégier les salutations à distance</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form6_2'])): ?>
        <p style="color: red">Les services de transport en commun sont toujours utilisable sans risque si on prend toutes les précautions nécessaires</p>
    <?php else: ?>
        <p style="color: greenyellow">Les services de transport en commun sont toujours utilisable sans risque si on prend toutes les précautions nécessaires</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form6_3'])): ?>
        <p style="color: red">On peut respecter les règles de sécurité tout en restant poli</p>
    <?php else: ?>
        <p style="color: greenyellow">On peut respecter les règles de sécurité tout en restant poli</p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['resume']['form6_4'])): ?>
        <p style="color: red">NON les antennes 5g ne propagent pas le coronavirus</p>
    <?php else: ?>
        <p style="color: greenyellow">NON les antennes 5g ne propagent pas le coronavirus</p>
    <?php endif; ?>

<?php endif;?>

<a class="blue_bt" href="<?=$dest?>">Suivant</a>
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
