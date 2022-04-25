<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>

<section class="oui">
     <div class="container">
          <h1>Générer un tableau :</h1>
          <form action="redirection.php" method="get">
               <label for="Ligne">Nombre de lignes du tableau:</label>
               <input type="number" name="Lignes" />
               <label for="Ligne">Nombre de colonnes du tableau:</label>
               <input type="number" name="Colonnes" />
               <label for="Ligne">Taille des bordures du tableau:</label>
               <input type="number" name="Bordures" />
          <div class="send">
          <input type="reset" value="Réinitialiser" style="cursor: pointer;">
          <input type="submit" name="submit" value="Envoyer">
          </div>
          </form>
          
          </form>     
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

<?php 
   if ( isset( $_GET['submit'] ) ) {

      $Lignes = $_GET['Lignes'];
      $Colonnes = $_GET['Colonnes']; 
      $Bordures = $_GET['Bordures']; 

     exit; 
  }
?>
<?php require('fin.php'); ?>