<?php

session_start();

if(isset($_SESSION["usersession"])){


  echo "välkommen".$_SESSION["usersession"]."<br>";

  echo"hemligt";

  echo"<a href=\"logout.php\">Logga ut</a>";


}else{

  header('Location: index.php');

}



 ?>
