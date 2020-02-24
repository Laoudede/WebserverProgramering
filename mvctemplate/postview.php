<?php

function postview(){

 ?>

 <div class="row">
   <div class="col-xs-12 col-md-8">

     <ul>


     <?php
      $postmodel = new postmodel();
      $commentmodel = new commentmodel();
      foreach($postmodel->get() as $post){
        echo "<li id='rubrik'>"."<h1>".$post['rubrik']."</h1>"."</li>"; /* har gett dom id för att kunna fixa css */
        echo "<li id='bild'>". "<img src=".'./bilder/'.$post['bild'].">"."</img>"."</li>";
        echo "<li id='text'>".$post['text']."</li>";

        echo "<br>";
      }
     foreach ($commentmodel->get() as $comment) {
          echo "<li id='kommentar_text'>".$comment['text']."</li>";
          echo "<br>";
        }
      ?></ul>

    </div>
<?php
}
 ?>
