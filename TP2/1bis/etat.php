<link rel="stylesheet" href="redirect.css">  
<?php require('debut.php'); ?>
<section class="oui">
     <div class="container">
          <a href="index.php" class="leave">X</a>
          <h1>Etat civil :</h1>
<?php

     echo "Prénom : " . $_GET ['Prenom']. "<br>" ;
     echo "Nom : " . $_GET ['Nom'];
?>
          </div>
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>
<?php require('fin.php'); ?>