<link rel="stylesheet" href="redirect.css">    
<?php require('debut.php'); ?>
<section class="oui">
     <div class="container">
          <a href="index.php" class="leave">X</a>
          <h1>Votre adresse :</h1>
<?php

     echo "Vous habitez à : <br>". $_GET ['Adresse']. "<br>" ;
     echo $_GET ['CodePostal']." ".$_GET ['Ville'];
?>
          </div>
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>
<?php require('fin.php'); ?>