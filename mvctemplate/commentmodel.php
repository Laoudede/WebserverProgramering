<?php
class commentmodel extends DB {

  function get(){
    return $this->select("SELECT * FROM comments WHERE post_fk = :num"); /* ändra num till in-parametern som skickas med vilket ska vara nuvarande siffran för post_pk */
  }
}
?>
