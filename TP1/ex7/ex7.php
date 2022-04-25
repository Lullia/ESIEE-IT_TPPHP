<?php require('debut.php'); ?>

<h2> Veuillez entrer le pseudo à rechercher: </h2>
<form method="get" action="ex7.php">
<p> Pseudo : <input type="text" name="pseudo" value="<?php if(isset($_GET['pseudo']))echo $_GET['pseudo'];?>"/>
<input type="submit" value="Search"/></p>
</form>


<?php
        $personnes = array(
            'mdupond' => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
            'jm' => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
            'toto' => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
            'arn' => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
            'email' => array('prenom' => 'Emilie', 'nom' => 'Ailta', 'age' => 46, 'ville' => 'Villetaneuse'),
            'dask' => array('prenom' => 'Damien', 'nom' => 'Askier', 'age' => 7, 'ville' => 'Villetaneuse')
        );

        $find= false ;
        if( ( isset($_GET['pseudo']) ) and ( trim($_GET['pseudo']) !='') )
        {   
                $pseudo = $_GET['pseudo'];
                foreach ($personnes as $p => $info)
                        if($p==$pseudo)
                        {
                                echo '<p> Bonjour ' . $info['prenom'] . ' ' . $info['nom'] .
                                '. Vous avez '. $info['age'] . ' et vous habitez ' .
                                $info ['ville'] . '. </p>'."\n";
                                $find=true;
                        }
        }
        if($find== false )
        {
                echo '<p> Désolé, votre pseudo n\'apparaît pas dans la liste! </p>'."\n";
        }
?>
<?php require('fin.php'); ?>