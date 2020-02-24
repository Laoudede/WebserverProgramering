<?php
class commentmodel extends DB {

  function get(){
    return $this->select("SELECT * FROM comments WHERE post_fk = comment_pk"); /* denna SQL-frågan är fucked. nuvarande kommer bara läsa in kommentaren i det magiska fall att det finns en post_fk som har samma nummer som comment_pk*/
  }
}
?>
