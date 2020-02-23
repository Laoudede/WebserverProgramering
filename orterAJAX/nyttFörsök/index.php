<?php
error_reporting(E_ALL);
include 'dbconnect.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$pdo=anslutdb();

$sql = "SELECT * FROM geo_counties";
$stmt = $pdo->query($sql);
$stmt->execute();

echo "<select id=\"county\">";
while ($row = $stmt->fetch()){
  echo "<option value=".$row['countyid'].">".$row['name']."</option>";

}
echo "</select>";


 ?>
<div id="text"></div>
 <script type="text/javascript">


 $( "select" ).change(function() {

   $.get( "dbsvar.php", {valCounty: $( "#county" ).val()}, function( data ) {
     console.log(data)


    var selectList = document.createElement("select");
    selectList.setAttribute("id", "mySelect");
    text.appendChild(selectList);

    for (var i = 0; i < data.length; i++) {
    var option = document.createElement("option");
    option.setAttribute("value", data[i]);
    option.text = data[i].name;
    selectList.appendChild(option);
    }

   }, "json" );

 });


 </script>



  </body>
</html>
