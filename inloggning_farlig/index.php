<?php


if(isset($_GET['login'])){

  echo "felaktig inloggningsinformation";

}


echo <<<INDEX

<form action="inlogg.php" method="get">

<input type="text" name="username">
<input type="password" name="password">
<input type="submit" name="knapp" value="Send form">

</form>


INDEX;

 ?>
