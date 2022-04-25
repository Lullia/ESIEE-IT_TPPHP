<?php require('debut.php'); ?>
<h1> Liste de carrés </h1>
<ul>
<?php
for ($i = 1; $i < 31 ; $i++)
echo '<li>' . $i . '<sup> 2 </sup> = ' . $i * $i . '</li>'. "\n";
?>
</ul>
<?php require('fin.php'); ?>
