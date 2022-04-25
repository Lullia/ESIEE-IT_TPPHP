<link rel="stylesheet" href="table.css">
<?php require('debut.php'); ?>
<?php 
$Lignes = $_GET['Lignes'];
$Colonnes = $_GET['Colonnes']; 
$Bordures = $_GET['Bordures'];
$string = '<td></td>';
?>
<section class="oui">
<div class="container">

<?php
echo '<table style="border:'.(int)$Bordures.'px solid white">';
for ($i=0; $i<(int)$Lignes; $i++) {
    echo '<tr>'. str_repeat($string, $Colonnes). '</tr>';
 }


?>
</table>
</div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  

</section>




