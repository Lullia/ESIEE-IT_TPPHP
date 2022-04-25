<?php require('debut.php'); ?>
<?php
$jourMois = array('janvier'=>31, 'février' => 28, 'mars' =>31, 'avril' => 30, 'mai' => 31, 'juin' => 30, 'juillet' => 31, 'août' => 31, 'septembre' => 30, 'octobre' => 31, 'novembre' => 30, 'décembre' => 31);
echo '<table> <tr> <th> Mois </th> <th> Nombre de jours </th> </tr>'."\n";
 foreach($jourMois as $m => $nbrJ)
         echo '<tr> <td>' . $m . ' </td><td> '. $nbrJ . " </td> </tr>\n";
echo '</table>';
?>
<?php require('fin.php'); ?>
