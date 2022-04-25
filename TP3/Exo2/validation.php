<?php require("config.php"); ?>
<?php

$Login = $_GET['Login'];
$Password = $_GET['Password'];
$Afaire = $_GET['afaire'] ?? null;


if ($Login == LEBONLOGIN && $Password == LEBONPASS) {
    session_start();
    $_SESSION["CONNECT"] = "OK";
    $_SESSION["Login"] = $_GET['Login'];
    $_SESSION["Password"] = $_GET['Password'];
    header('Location:accueil.php');
     }
     
if ($Login == "" && $Password == "" or $Login == "" or $Password == "") {
    header('Location:login.php?Error=1');
     }

if ($Login != LEBONLOGIN && $Password != LEBONPASS) {
    header('Location:login.php?Error=2');
}

if ($Afaire == "deconnexion") {
    header('Location:login.php?Error=3');
    session_destroy ();
}
?>