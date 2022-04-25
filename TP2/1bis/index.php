<link rel="stylesheet" href="styles.css">    
<?php require('debut.php'); ?>

<section class="oui">
<div class="container">
<h1>Formulaire</h1>   
<form action="redirection.php" method="get">
   <label for="Prenom">Prénom:</label>
   <input type="text" name="Prenom" required/>
   <label for="Nom">Nom:</label>
   <input type="text" name="Nom" required/>
   <label for="Adresse">Adresse:</label>
   <input type="text" name="Adresse" required/>
   <label for="Ville" required>Ville:</label>
   <input type="text" name="Ville" />
   <label for="CodePostal">Code postal:</label>
   <input type="text" name="CodePostal" required/>
   <div class="send">
   <input type="reset" value= "Réinitialiser">
   <input type="submit" name="submit" value="Envoyer">
   </div>
</div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>  
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
      $Prenom = $_GET['Prenom'];
      $Nom = $_GET['Nom']; 
      $adresse = $_GET['Adresse']; 
      $ville = $_GET['Ville'];
      $codepostal = $_GET['CodePostal'];

     exit; 
  }
?>

<?php require('fin.php'); ?>