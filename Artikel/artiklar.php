<?php

session_start();
$_SESSION['user']=session_id();
echo $_SESSION['user'];
// $art=array(
//
//   array("lg 32", 1000, "tv1", "bild.png"),
//   array("lg 42", 2000, "tv2", "bild.png"),
//   array("lg 48", 3000, "tv3", "bild.png"),
//
// );

require 'dbconnect.php';

$db = new dbconnect();
//statement = dbconnectobjekt->instansvariabeln_pdo->metoden query som finns i pdo klassen
$stmt = $db->pdo->prepare("SELECT * FROM artiklar");
$stmt->execute();
$data = $stmt->fetchAll();
// print_r($data);

?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="css/style.css">

  </head>
  <body>



<?php

echo "<div id=\"wrapper\">";

foreach ($data as $row) {

echo <<<ARTIKEL


  <div id="artikel">

  <fieldset id="field">
  <img src="bilder/{$row['bild']}"
  <legend> {$row['namn']} </legend>
  pris: {$row['pris']}

  <form action="addtocart.php" method="get">

  <select name="antal">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>

    <input type="hidden" name="artid_pk" value="{$row['artid_pk']}">

    <input type="submit" name="k" value="köp">

  </form>

  </fieldset>


  </div>

ARTIKEL;


}


 ?>
</div>

</body>
</html>
