<?php

function postview(){


}
 ?>

 <div class="row">
   <div class="col-xs-12 col-md-8">

     <ul>


     <?php
      $postmodel = new postmodel();
      $commentmodel = new commentmodel();
      foreach($postmodel->get() as $post){
        echo "<li id='rubrik'>".$post['rubrik']."</li>"; /* har gett dom id för att kunna fixa css */
        echo "<li id='text'>".$post['text']."</li>";
        echo "<li id='bild'>".$post['bild']."</li>";

        /*  foreach ($comment->get() as $comment) {  typ funktion "got children"
            echo "<li id='text'>".$comment['text']."</li>";
          }*/

        echo "<br>";
      }
      ?></ul>

    </div>
