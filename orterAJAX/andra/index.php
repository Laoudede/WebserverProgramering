<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>AJAX</title>
    <script type="text/javascript">
  		$(document).ready(function(){
  			$("#län").change(function(){
  				var länID = $("#län").val();
  				$.ajax({
  					url: 'dbsvar.php',
  					method: 'post',
  					data: 'länID=' + länID
  				}).done(function(kommuner){
  					console.log(kommuner);
  					kommuner = JSON.parse(kommuner);
  					$('#kommun').empty();
  					kommuner.forEach(function(kommun){
  						$('#kommun').append('<option>' + kommun.name + '</option>')
  					})
  				})
  			})
  		})
  	</script>
  </head>
  <body>

  <select id="län" name="län">
    <option selected="" disabled="">Välj län</option>
    <?php
      include 'dbsvar.php';
      $län = laddaLän();
      foreach ($län as $Län) {
        echo "<option id='".$Län['name']."' value='".$Län['countyid']."'>".$Län['name']."</option>";
      }
     ?>
  </select>

  <select id="kommun" name="kommun">
    <option selected="" disabled="">Välj kommun</option>

  </select>

</body>
</html>
