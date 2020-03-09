<?php
class commentmodel extends DB {

  function get($comment_pk){
    return $this->select("SELECT * FROM comments WHERE comment_pk = :commentpk",  array(":commentpk" => $comment_pk)  );

  }

function hasChild($comment_pk) {
  return $this->select("SELECT * FROM comments WHERE comment_fk = :commentpk",  array(":commentpk" => $comment_pk)  );

}

}
?>
