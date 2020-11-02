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
<?php
$servername ="localhost";
$username = "esempioscarpa";
$password = "";
$dbname = "my_esempioscarpa";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idgeo,postocercato FROM geo";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
   echo "<table border=1><tr><th>ID</th><th>Ricerca</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idgeo"]."</td><td>".$row["postocercato"]."</td></tr>";
  }
  
   echo "</table>";
   echo "<br><br><br><br>";
}
$conn->close();
?>



<?php
$servername ="localhost";
$username = "esempioscarpa";
$password = "";
$dbname = "my_esempioscarpa";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idrevgeo,latitudine,longitudine FROM revgeo";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
   echo "<table border=1><tr><th>ID</th><th>Latitudine</th><th>Longitudine</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idrevgeo"]."</td><td>".$row["latitudine"]."</td><td>".$row["longitudine"]."</td></tr>";
  }
  
   echo "</table>";
   echo "<br><br><br><br>";
}
$conn->close();
?>
<br>
<a href="http://esempioscarpa.altervista.org/colloquio/index.html">Torna alla home</a>