<html>
  <title>
    Community Service Search
  </title>
  <body>
    <h1>Redirecting...</h1>
    <?php
$Name = $_POST["Name"];
$Description = $_POST["Description"];
$Location = $_POST["Location"];
$Lattitude = $_POST["Latitude"];
$Longitude = $_POST["Longitude"];
$Date = $_POST["Date"];
$Time = $_POST["Time"];
$submit = $Name . "," . $Description . "," . $Location . "," . $Lattitude . "," . $Longitude . "," . $Date . "," . $Time . "\n";
$file = fopen("newfile.csv","a") or die("Cannot Open File");
fwrite($file,$submit);
?>
<script>window.location.replace("index.php");</script>
  
  </body>
  
</html>
