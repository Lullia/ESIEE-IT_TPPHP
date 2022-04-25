<link rel="stylesheet" href="tables.css">
<?php require('debut.php'); ?>
<?php

$personnes = array(
    'mdupond'=> array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
    'jm'=> array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto'=> array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn'=> array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
    'email'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
    'dask' => array('prenom'=>'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')
    );

    function showTable ($personnes)
{
        echo '<table>'."\n";
        $ligne = 0;
        foreach ($personnes as $pseudo => $info)
        {
            if($ligne==0)
            {
                    echo '<tr>'."\n";
                    foreach ($info as $c => $v)
                    echo '<th>' . $c . '</th>' ;
                    echo '</tr>'."\n";
                    $ligne ++;
            }
            if($ligne%2==1)
                    $class = 'impair';
            else
                    $class = 'pair';
            echo '<tr class="'. $class .'">'."\n";
            foreach ($info as $v)
                    echo '<td>' . $v . '</td>' ;
            echo '</tr>'."\n";
            $ligne ++;
        }
        echo '</table>'."\n";
}
showTable($personnes)

?>
<?php require('fin.php'); ?>
