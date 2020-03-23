<?php

require 'dbconnect.php'

  function get(){
    $this->stmt = $this->pdo->prepare("INSERT INTO comments (text, comment_fk), VALUES ()");
  $this->stmt->execute();
  }

 ?>
