
<?php
header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("UTF-8");
$host = "localhost";
$user = "root";
$pass = "";
$db = "ecompetency";
$link = mysqli_connect("localhost","root","",$db);
//echo "Connected to MySQL<br>";

$sql = "select * FROM user";

//echo "p'jack ";
 mysqli_query($link,"SET NAMES utf8 ");
 $result = mysqli_query($link,$sql);


$b = array();
while ($row = mysqli_fetch_array($result)) {
    //print_r($row);
    //echo"p'mui";
    $a = new stdClass();
    $a->division_id = $row["firstname_th"];
    $a->group_name = $row["lastname_th"];
    //$tmpName=iconv("UTF-8","ISO-8859-1",$name);
    array_push($b, $a);
}
echo json_encode(array("data" => $b));
?>