<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action=javascript:inputData() method="post">

      <textarea name="input" id="inputID" rows="8" cols="80"></textarea>
      <button type="submit" name="inputKnapp">Lägg till</button>

    </form>

<div id="lista">



</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

  function inputData($input) {


    console.log($( "#inputID" ).val())
    conn.send($input.val())
    console.log("skickat")
  }

</script>


    <script type="text/javascript">

    var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {

  $("#lista").text(e.data)

};



    </script>
  </body>
</html>
