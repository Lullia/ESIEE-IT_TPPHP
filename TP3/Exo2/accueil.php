<?php 
session_start();
if ($_SESSION["CONNECT"] != "OK"){
    header("Location:login.php");
}
?>

<html lang="fr">
<head>
     <meta charset="UTF-8">
     <title>Document</title>
     <link rel="stylesheet" href="styles.css">
</head>

<body>
<section class="oui">
     <div class="container">
         <?php echo "<h1> Hello ".$_SESSION["Login"]."</h1>"?>
         <a href="validation.php?afaire=deconnexion" class="leave">X</a>
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

</body>
</html>