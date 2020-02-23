<?php
error_reporting(E_ALL);
include 'dbconnect.php';
$pdo=anslutdb();

$renCounty=filter_input($_GET["valCounty"], FILTER_SANITIZE_SPECIAL_CHARS);
echo $renCounty;

$sql = "SELECT * FROM geo_municipalities WHERE countyid=". $_GET["valCounty"];
$stmt = $pdo->query($sql);
$stmt->execute();
$kommuner = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($kommuner);
 ?>
