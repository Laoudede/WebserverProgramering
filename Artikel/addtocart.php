<?php

  session_start();
  // echo $_GET['antal']."<br>";
  // echo $_GET['artid_pk']."<br>";
  // echo $_SESSION['user'];

$antal_clean=filter_input(INPUT_GET,'antal', FILTER_SANITIZE_STRING);
$artid_pk_clean=filter_input(INPUT_GET,'artid_pk', FILTER_SANITIZE_STRING);

$db = new dbconnect();
//statement = dbconnectobjekt->instansvariabeln_pdo->metoden query som finns i pdo klassen

$stmt = $pdo->prepare("insert into cart(artid_fk,user_fk,antal)values(?,?,?)");
$stmt->bindParam(1, $artid_pk_clean);
$stmt->bindParam(2, $_SESSION['user']);
$stmt->bindParam(3, $antal_clean);


$stmt->execute();
$stmt = null;

 ?>
