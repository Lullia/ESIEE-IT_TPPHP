<html lang="fr">
<head>
     <meta charset="UTF-8">
     <title>Document</title>
     <link rel="stylesheet" href="styles.css">
</head>

<body>
<section class="oui">
     <div class="container">
          <h1>Connectez-vous :</h1>
          <form action="validation.php" method="get">
               <label for="Login">Identifiant:</label>
               <input type="text" name="Login"/>
               <label for="Password">Mot de passe:</label>
               <input type="password" name="Password"/>
          <div class="send">
          <input type="submit" name="submit" value="Envoyer" style="cursor: pointer;">
          <?php
               $Error = $_GET['Error'] ?? null;
               if ($Error == 1){
                    echo "Erreur 1 : Veuillez saisir un login et un mot de passe";
               }
               if ($Error == 2){
                    echo "Erreur 2 : Erreur de login/mot de passe";
               }
               if ($Error == 3){
                    echo "Erreur 3 : Vous avez été déconnecté du service";
               }
          ?>
          </div>
          </form>
          
<?php 
   if ( isset( $_GET['submit'] ) ) {
     $Login = $_GET['Login'];
     $Password = $_GET['Password'];
    exit; 
  }



?>  
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

</body>
</html>