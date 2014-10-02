
<?php
header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("UTF-8");
$host="localhost:8889";
$user="root";
$pass="root";
$db="competency_db";
$dbhandle = mysql_connect($host, $user,$pass) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$employee_division = $_REQUEST['employee_division'];
mysql_select_db($db);
$sql = "SELECT * FROM division where employee_division='$division_code'";
$sql = "SELECT * FROM employee where employee_division='$employee_division'";

//echo "p'jack ";
mysql_query("SET NAMES utf8 ");
$result = mysql_query ($sql);

//echo "error".mysql_error();

$b = array();
while ( $row= mysql_fetch_array ( $result ) )       
{
    //print_r($row);
    //echo"p'mui";
   $a = new stdClass();
   $a->employee_id=$row["employee_id"]; 
   $a->title=$row["employee_title"]; 
   $a->firstname= $row["employee_firstname"];
   $a->lastname= $row["employee_lastname"];
   $a->employee_division=$row["employee_division"];
   $a->level=$row["employee_level"];
   $a->user_id=$row["user_id"];
   //$tmpName=iconv("UTF-8","ISO-8859-1",$name);
   array_push($b, $a);
 echo "<br> ข้อมูล : $employee_division<br> ";
 
}
echo json_encode(array("data"=>$b));
?>