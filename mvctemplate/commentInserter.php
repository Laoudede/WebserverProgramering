<?php

class commentInserter extends DB {

  function get(){ #ändra get till post när testning är klar
    $this->stmt = $this->pdo->prepare("INSERT INTO comments (text, comment_fk), VALUES ()");
  $this->stmt->execute(NULL /*$cond */);
  }
}
 ?>
