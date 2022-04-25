<link rel="stylesheet" href="redirect.css">  
<?php require('debut.php'); ?>

<?php
      $Prenom = $_GET['Prenom'];
      $Nom = $_GET['Nom']; 
      $adresse = $_GET['Adresse']; 
      $ville = $_GET['Ville'];
      $codepostal = $_GET['CodePostal'];
?>
<section class="oui">
     <div class="container">
          <a href="index.php" class="leave">X</a>
          <h1>Vous souhaitez consulter :</h1>
          <div class="links">
          <a href="etat.php?Prenom=<?=$Prenom?>&Nom=<?=$Nom?>" method="get">Votre état civil</a>
          <a href="adresse.php?Adresse=<?=$adresse?>&Ville=<?=$ville?>&CodePostal=<?=$codepostal?>">Votre adresse</a>
          </div>
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>
<?php require('fin.php'); ?>