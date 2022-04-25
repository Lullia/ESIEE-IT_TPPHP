<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>

<section class="oui">
     <div class="container">
          <h1>Entrez les nombres :</h1>
          <form action="redirection.php" method="get">
          <div class="container-numb">
               <input type="number" name="Initial" value="0" required/> 
               <p>est-il compris entre</p> 
               <input type="number" name="First" value="0" required/>
               <p>et</p>
               <input type="number" name="Secund" value="0" required/>          
          </div>
          <input class="submit" type="submit" name="submit" value="Réponse">
          </form>     
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

<?php 
   if ( isset( $_GET['submit'] ) ) {

      $Initial = $_GET['Initial'];
      $First = $_GET['First']; 
      $Secund = $_GET['Secund']; 

     exit; 
  }
?>
<?php require('fin.php'); ?>