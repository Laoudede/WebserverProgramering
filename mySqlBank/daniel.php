<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank1920";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM person,personkonto,konto,kort,typ WHERE personnr_pk = personkonto.personnr_fk AND personnr_pk = kort.personnr_fk AND kontonr_pk = personkonto.kontonr_fk AND typ_pk = typ_fk AND namn = 'daniel'";
$result = $conn->query($sql);

echo"
<style>
table, th, td {

  border: 1px solid black;
  border: collapse;
}
th, td {
  padding: 5px;
  text-align:left;
}
</style>

<table>
  <tr>
    <th>Person</th>
    <th>Konto</th>
    <th>Kort</th>
    <th>Korttyp</th>
    <th>Saldo</th>
  </tr>";

  while ($row = mysqli_fetch_array($result)) {

      echo "<tr>" . "<td>" . $row['namn'] . "</td>" .
          "<td>" . $row['kontonr_pk'] . "</td>" .
          "<td>" . $row['kortnr_pk'] . "</td>" .
          "<td>" . $row['typ'] . "</td>" .
          "<td>" . $row['saldo'] . "</td>" . "</tr>";
  }
echo "</table>";


$conn->close();

echo"</body>
</html>";
?>
