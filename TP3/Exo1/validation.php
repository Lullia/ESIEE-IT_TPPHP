<?php require('config.php'); ?>
<?php

#Vérification si c'est un bon login/mdp
$Login = $_GET['Login'];
$Password = $_GET['Password'];

if ($Login == LEBONLOGIN && $Password == LEBONPASS) {
    header('Location: accueil.php');
}

if ($Login == "" && $Password == "") {
    header('Location:login.php?Error=1');
    }

if ($Login != LEBONLOGIN && $Password != LEBONPASS) {
    header('Location:login.php?Error=2');
     }
?>