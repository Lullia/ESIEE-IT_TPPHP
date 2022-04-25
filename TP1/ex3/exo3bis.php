<?php require('debut.php'); ?>
<?php 

    function chCarre($nb){
        return $nb.'<sup>2</sup> ='.$nb*$nb;
    }

for ($i = 1; $i < 31; $i++)
        echo '<li>'.chCarre($i)."</li>\n"

?>
<?php require('fin.php'); ?>