<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

  <a href="daniel.php">Daniel</a>
  <a href="veronica.php">Veronica</a>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bank1920";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  ?>
</body>

</html>
