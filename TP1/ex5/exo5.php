<?php require('debut.php'); ?>
<?php
$mois = array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
echo '<ol>';
 foreach($mois as $m)
         echo '<li>' . $m . "</li>\n";
echo '</ol>';
?>
<?php require('fin.php'); ?>
