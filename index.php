<html>
  <head>
    <title>Community Service Search</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body> 
    <h1>Community Service Search</h1>
    <h2>Need Community Service Hours? Find an opportunity below!</h2>
    <h2>OR</h2>
    <a href="add-service.html">Tell us about an opportunity in Cambridge</a>
    <?php 
echo "<h1 id='sebastian-test-zone'></h1>";
// $myfile = fopen("newfile.txt","a") or die("Unable to open file!");
// fwrite($myfile,"hi<br>");
// fclose($myfile);
// $myfileread = fopen("newfile.txt","r") or die("Unable to open file!");
// $txt = fread($myfileread,filesize("newfile.txt"));
// echo "<p>$txt<p>";
$csv = fopen("newfile.csv","r");
$csv_readable = fgetcsv($csv);
$csv_array = array_map("str_getcsv",file("newfile.csv",FILE_SKIP_EMPTY_LINES));
$array_keys = array_shift($csv_array);
echo "<br>";
$dataframe = array();
foreach($array_keys as $key){
   $dataframe[$key] = array();
}
for($i = 0; $i < count($csv_array);$i++){
  for($j = 0; $j < count($csv_array[$i]);$j++){
    $dataframe[$array_keys[$i]][$j] = $csv_array[$i][$j];
  }
  echo "<br>";
}
echo "<table>";
echo "<tr>";
foreach($array_keys as $key){
  echo "<th>$key</th>";
}
echo "</tr>";
for($i=count($csv_array);$i>0;$i--){
  echo "<tr>";
  foreach($csv_array[$i-1] as $element){
    echo "<td>$element</td>";
  }
  echo "</tr>";
}


// echo 

// while(!feof($csv))
// {
//   $csv_array = (fgetcsv($csv));
//   echo ((string)($csv_array));
//   for($i = 0; $i < count($csv_array); $i++){
//     echo $csv_array[$i] . " ";
//   }
//   echo "<br>";
// }
// echo foreach($a in $csv_readable);
  
?> 
<script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
<script src="geospatial.js">
  </script>
  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
    <!-- Works Cited:
    W3Schools
    Stack Overflow
    PHP Docs
    Tutorial Republic
    Geeksforgeeks
    
    -->
  
  </body>
</html>