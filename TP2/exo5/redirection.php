<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>
<?php 
$Jour = $_GET['Jour'];
$Mois = $_GET['Mois'];
$Année = $_GET['Année'];
?>
<section class="oui">
    <div class="container">
        <h1>Résultat:</h1>
        <?php 
            echo "La date choisie est le $Jour/$Mois/$Année"
        ?>
        <a href="index.php" class="leave">X</a>
    </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  

</section>




