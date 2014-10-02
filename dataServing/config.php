<?php
header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("UTF-8");
$host = "localhost:8889";
$user = "root";
$pass = "";
$db = "competency_db";
$dbhandle = mysql_connect($host, $user, $pass)
        or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
mysql_select_db($db);

$username = $_REQUEST['user'];
$password = md5($_REQUEST['pwd']);

$sql = "SELECT * FROM user where username='$username' AND password='$password' AND status='0'";
mysql_query("SET NAMES utf8 ");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

