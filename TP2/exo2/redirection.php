<link rel="stylesheet" href="redirect.css">
<?php require('debut.php'); ?>

<?php
    $Initial = $_GET['Initial'];
    $First = $_GET['First']; 
    $Secund = $_GET['Secund']; 
?>

<section class="oui">
     <div class="container"> 
     <a href="index.php" class="leave">X</a>
          <h1>Résulat du test :</h1>
          <?php

     echo '<p class="question">'.$_GET ['Initial']. " est-il compris entre ".$_GET ['First']." et ".$_GET ['Secund']." ?</p>";
     
     if ($Initial >= $First && $Initial <= $Secund) {
        echo 'Oui, '.$Initial.' est compris entre '.$First.' et '.$Secund.'.';
     }
     else {
        echo 'Non, '.$Initial.' n\'est pas compris entre '.$First.' et '.$Secund.'.';
     }
?>   
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>
<?php require('fin.php'); ?>