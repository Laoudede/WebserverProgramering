<?php
class postmodel extends DB {

  function get(){
    return $this->select("SELECT * FROM posts ");
  }
}
?>
