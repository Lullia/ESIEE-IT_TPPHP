<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>

<section class="oui">
     <div class="container">
          <h1>Connectez-vous :</h1>
          <form action="index.php" method="get">
               <label for="Login">Identifiant:</label>
               <input type="text" name="Login" required/>
               <label for="Password">Mot de passe:</label>
               <input type="password" name="Password" required/>
          <div class="send">
          <input type="submit" name="submit" value="Envoyer" style="cursor: pointer;">
          </div>
          </form>
          
<?php 
   if ( isset( $_GET['submit'] ) ) {

      $Login = $_GET['Login'];
      $Login = trim($Login);
      $Login = strtoupper($Login);
      $Password = $_GET['Password'];
      $Password = trim($Password);
      $Password = strtoupper($Password);
      if ($Login == 'LULLIA' && $Password == '1702') {
          echo "<p class='welcome'>Bienvenue</p>";
          echo "<style>input, label, h1{display:none}</style>";
          echo '<a href="index.php" class="leave">X</a>';
     }
     exit; 
  }



?>  
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

<?php require('fin.php'); ?>