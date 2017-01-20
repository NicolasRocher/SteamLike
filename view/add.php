<?php
include('config.php');

$pseudo = $_POST['pseudo'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];



$sql="INSERT INTO Users (pseudo, nom, email, pass, pass2)
VALUES ('$pseudo','$nom','$email','$pass', '$pass2')";

$req = $db->prepare($sql);
$req->execute();
?>
