<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "80146599C6", "stephane_bdcv");

$result = $conn->query("SELECT * FROM Skillz");

$rows=[];
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$rows[]=$rs;  

/*  if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'. $rs["skill"].'",';
  $outp .= '"online":"'. $rs["level"].'"}';*/

}
//$outp ='{"obj":['.$outp.']}';
$outp = '{"obj":'.json_encode($rows).'}';
$conn->close();

//echo json_encode($rows);

echo($outp);
?>
