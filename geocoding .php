<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title></title>
</head>
<body>
<table style="border-collapse: collapse; width: 100.109%; border-style: none;" border="0">
<tbody>
<tr>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 21.0506%;">&nbsp;</td>
<td style="width: 19.0752%;"><img style="width: 30%; height: 30%;" src="mela.gif" /></td>
</tr>
<tr>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 20%;">&nbsp;</td>
<td style="width: 21.0506%;">&nbsp;</td>
<td style="width: 19.0752%;"><span style="font-size: 8pt;">Mela inc. di Scarpa Roberto</span></td>
</tr>
</tbody>
</table>

<form action="revgeocoding.php" method="post">
Latitudine:<input type="text" name="lat">
Longitudine:<input type="text" name="lon">
<input type="submit" name="invia" value="Reverse Geolocation">
</form>
<br><br>
<form action="geocoding.php" method="post">
Indirizzo, Codice postale o nome città:<input type="text" name="citta">
<input type="submit" name="invia" value="Forward Geolocation">
</form>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
    $.ajax({
      type: "POST",
    <?php
    $citta=$_POST["citta"];  
    $url=('url: "https://eu1.locationiq.com/v1/search.php?key=pk.de526cfe923212a1f9fbf9654a0a56ec&q='.$citta.'&format=json&limit=1", ');
    echo $url;
    ?>
      crossDomain:true,
      data: "",
      dataType: "json",
      success: function(ris)
      {
         
        var risultatohtml="    Lat=" + ris[0].lat + "     Lon=" + ris[0].lon;
		$("#risultato").html(risultatohtml);
      },
      error: function()
      {
        $("risultato").html("Chiamata fallita, si prega di riprovare...");   
      }
    });
</script>
<br>
<b>Le coordinate corrispondenti ai dati immessi sono: <div id="risultato">  </div></b>
<?php

$servername ="localhost";
$username = "esempioscarpa";
$password = "";
$dbname = "my_esempioscarpa";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
$sql = "INSERT INTO geo (postocercato) VALUES ('$citta')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('I valori sono stati inseriti');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('I valori non sono stati inseriti');
	</script>
	<?php
}


?>


</body>
</html>