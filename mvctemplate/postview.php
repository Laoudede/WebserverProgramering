<?php

function postview($validate){

 ?>

 <div class="row">
   <div class="col-xs-12 col-md-8">

     <ul>


     <?php
      $postmodel = new postmodel();
      if ($validate==True) {
        $postmodel->get();
      }
      $commentmodel = new commentmodel();
      $commentInserter = new commentInserter();
      foreach($postmodel->get() as $post){
        echo "<li id='rubrik'>"."<h1>".$post['rubrik']."</h1>"."</li>"; /* har gett dom id för att kunna fixa css */
        echo "<li id='bild'>". "<img src=".'./bilder/'.$post['bild'].">"."</img>"."</li>";
        echo "<li id='text'>".$post['text']."</li>";
        $tillhörighet=$post['post_pk'];
        echo "<br>";
        echo "<div>";
          foreach ($commentmodel->get($tillhörighet) as $comment) {
             echo "<li id='kommentar_text'>".$comment['text']."</li>";
             echo "<br>";
             echo'<form action="commentInserter" method="get">';
                    echo' Kommentera: <input type="text" name="kommentar" id="kommentar">';
                    echo'<input type="hidden" name="pk" value="'.$comment['comment_pk'].'" > ';
                   echo'<input type="submit">';
               echo'</form>';

              // har jag barn? om jag har det anropa mig själv, skicka med pk

             echo "<div>";
           if (True/* hitta något sätt att kolla om den stora kommentaren har "barn". Databasen kanske svarar med NULL eller nåt om det inte finns i en tabell */) {
                foreach ($commentmodel->hasChild($tillhörighet) as $childComment) {
                  echo "<li id='barn_kommentar_text'>".$childComment['text']."</li>";
                  echo "<br>";

                  echo'<form action="commentInserter" method="get">';
                         echo' Kommentera: <input type="text" name="kommentar" id="kommentar">';
                         echo'<input type="hidden" name="pk" value="'.$childComment['comment_pk'].'" > ';
                         echo'<input type="submit">';
                    echo'</form>';

                }
              }

             echo "</div>";
           }

        echo "</div>";
      }

      ?></ul>

    </div>
<?php
}
 ?>
