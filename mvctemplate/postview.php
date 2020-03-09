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
        $tillhörighet=$post['post_pk'];
        echo "<br>";
        echo "<div>";
          foreach ($commentmodel->get($tillhörighet) as $comment) {
             echo "<li id='kommentar_text'>".$comment['text']."</li>";
             echo "<br>";
             echo'<form action="commentInsertView" method="get">'; #Ändra get till post när testning är klar
                    echo'<input type="hidden" name="pk" value="'.$comment['comment_pk'].'"  ';
                    echo' Kommentera: <input type="text" name="kommentar">';
                   echo'<input type="submit">';
               echo'</form>';

              // har jag barn om jag har det anropa mig sjölv skicka med pk

             echo "<div>";
           if (True/* hitta något sätt att kolla om den stora kommentaren har "barn". Databasen kanske svarar med NULL eller nåt om det inte finns i en tabell */) {
                foreach ($commentmodel->hasChild($tillhörighet) as $childComment) {
                  echo "<li id='barn_kommentar_text'>".$childComment['text']."</li>";
                  echo "<br>";

                  echo'<form action="commentInsertView" method="get">'; #Ändra get till post när testning är klar
                         echo'<input type="hidden" name="pk" value="'.$comment['comment_pk'].'"  ';
                         echo' Kommentera: <input type="text" name="kommentar">';
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
