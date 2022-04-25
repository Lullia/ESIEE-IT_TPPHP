<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>
<?php 
$Activite = $_GET['Activite'];
$Jour = $_GET['Jour'];
$Mois = $_GET['Mois'];
$Année = $_GET['Année'];
$ActiviteSecund = $_GET['ActiviteSecund'];
sort($ActiviteSecund,SORT_NATURAL);
$car = ', '

?>
<section class="oui">
    <div class="container">
        <h1>Résultat:</h1>
        <?php 
            echo "La date choisie est le $Jour/$Mois/$Année.<br>";
            echo "Votre loisir favori est : $Activite. <br>";
            echo "Vous pratiquez aussi :";
            echo " ".implode($car,$ActiviteSecund).".";
        ?>
        <a href="index.php" class="leave">X</a>
    </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  

</section>




