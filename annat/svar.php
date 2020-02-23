<?php



  $username_clean=filter_input(INPUT_GET,'username', FILTER_SANITIZE_STRING);

  $username_dirty=$_GET['username'];

  echo htmlspecialchars($username_dirty, ENT_QUOTES);
  echo "<br>"."<h1>".htmlspecialchars($username_clean, ENT_QUOTES)."<h1>";





 ?>

 <!-- Lägger man saker utanför php taggarna kan man skriva html. -->
