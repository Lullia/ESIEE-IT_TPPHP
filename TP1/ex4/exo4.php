<link href="tables.css" rel="stylesheet">
<?php require('debut.php'); ?>
<table>
<?php
        $n=10;
        for($ligne=1;$ligne<$n;$ligne++)
        {
                if($ligne%2)
                        $class ='nbrimpair';
                else
                        $class ='nbrpair';
                echo '<tr class="'. $class. '">';
                for($col=1;$col<$n;$col++)
                {
                        if($ligne==1 || $col==1)
                                $cellule ='th';
                        else
                                $cellule ='td';
                        echo "<$cellule>";
                        if(($ligne!=1) and ($ligne==$col))
                                echo '<strong>';
                        if($ligne!=1 || $col!=1)
                                echo $ligne*$col;
                        if(($ligne!=1) and ($ligne==$col))
                                echo '</strong>';
                        echo "</$cellule>";
                }
                echo "</tr>\n";
        }
?>
</table>
<?php require('fin.php'); ?>
